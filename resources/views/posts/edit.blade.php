<x-layout>
  <h1>Edit Page</h1>

  <form action="/posts/{{ $post->id }}" method="post">
    @csrf
    @method('PATCH')

    <div class="field">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="{{ $post->title }}">
    </div>

    <div class="field">
      <label for="body">Body</label>
      <textarea name="body" id="body" placeholder="Today I went to...">{{ $post->body }}</textarea>
    </div>

    <div class="actions">
      <button type="submit">Update</button>
    </div>
  </form>

  <form action="/posts/{{ $post->id }}" method="post">
    @csrf
    @method('DELETE')

    <div class="actions">
      <button type="delete">Delete</button>
    </div>
  </form>
</x-layout>
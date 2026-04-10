<x-layout>
  <h1>New Page</h1>

  <form action="/posts" method="post">
    <div class="field">
      <label for="title">Title</label>
      <input type="text" id="title" name="title">
    </div>

    <div class="field">
      <textarea name="body" id="body" placeholder="Today I went to..."></textarea>
    </div>

    <div class="actions">
      <button type="submit">Submit</button>
    </div>
  </form>
</x-layout>
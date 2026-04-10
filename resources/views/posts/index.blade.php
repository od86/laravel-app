<x-layout>
  <h1>Index Page</h1>
  @foreach($posts as $post)
    <div>{{ $post->title }}</div>
    <div>{{ $post->body }}</div>
    <br>
  @endforeach
</x-layout>
<h1>Posts</h1>
@foreach ($posts as $post)
    <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
    <p>{{ $post->content }}</p>
@endforeach
<a href="{{ route('posts.create') }}">New Post</a>

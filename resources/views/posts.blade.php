<h1>All Posts</h1>

@foreach ($posts as $post)
    <div class="post">
        <h2>{{ $post->title }}</h2>
        <p>Category: {{ $post->category->name }}</p>
        <p>{{ $post->content }}</p>
        
    </div>
@endforeach

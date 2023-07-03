<h1>Latest Posts by Category</h1>

@foreach ($categories as $category)
    <div class="category">
        <h2>{{ $category->name }}</h2>
        @if ($category->latestPost)
            <h3>{{ $category->latestPost->title }}</h3>
            <p>{{ $category->latestPost->content }}</p>
        @else
            <p>No posts available for this category.</p>
        @endif
    </div>
@endforeach

@php
    $categories = \App\Models\Category::with('posts')->latest()->get();
    $posts = \App\Models\Post::latest()->get();
@endphp

<div class="blog_sidebar">
    <div class="p-3 p-xl-4 border rounded">
        <div class="card_header mb-4">
            <h3>Categories</h3>
        </div>
        <div class="categories_list">
            <ul>
                @foreach ($categories as $item)
                    <li><a href="{{ route('category.show', $item->slug) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="p-3 p-xl-4 border rounded mt-2">
        <div class="card_header mb-4">
            <h3>Latest Posts</h3>
        </div>
        <div class="latestpost_list">
            <ul>
                @foreach ($posts as $item)
                    <li><a href="{{ route('blogs.show',$item->slug) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

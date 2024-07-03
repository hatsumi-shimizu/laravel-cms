<x-layout>
    <div id="show-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('posts.index') }}">TOP</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('posts.product') }}">PRODUCT</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
        </ol>
    </div>
    <main id="show-main">
        <div id="show-wrapper">
            <div id="show-container">
                <div id="content-left">
                    <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post" class="delete-edit">
                        @method('PATCH')
                        @csrf

                        <button class="btn btn-dark"><a href="{{ route('posts.edit', $post) }}">EDIT</a></button>
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->category }}</p>
                    <div id="youtube">
                        <iframe width="560" height="311" src="https://www.youtube.com/embed/iUw3LPM7OBU?si=t7MmZfXBhC3YQQFB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div id="left-body">
                        <p>{!! nl2br(e($post->body)) !!}</p>
                    </div>
                    <div id="related-article">
                        <h4>Related Articles</h4>
                    </div>
                </div>
                <div id="content-right">
                    <div class="right-item item-top">
                        <h4>Latest Articles</h4>
                    </div>
                    <div class="right-item">
                        <h4>Categories</h4>
                    </div>
                    <div class="right-item">
                        <h4>Tags</h4>
                    </div>
                    <div class="right-item">
                        <h4>Banner</h4>
                    </div>
                </div>
            </div>
        </div>
</x-layout>

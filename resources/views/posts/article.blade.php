<x-layout>
    <div id="show-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('posts.index') }}">TOP</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('posts.news') }}">NEWS</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </div>
    <main id="show-main">
        <div id="show-wrapper">
            <div id="show-container">
                <h1></h1>
                <p></p>
            </div>
        </div>
</x-layout>

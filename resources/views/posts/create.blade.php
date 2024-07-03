<x-layout>
    <div id="create-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('posts.index') }}">TOP</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">CREATE A NEW POST</li>
        </ol>
    </div>
    <main id="create-main">
        <div id="create-container">
            <h1>CREATE A POST</h1>
            <form method="post" action="{{ route('posts.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    @error('category')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br>
                    <select class="form-control" name="category">
                        {{-- old('category')の付け方要確認 --}}
                        <option value="default">Please select.</option>
                        <option value="product">PRODUCT</option>
                        <option value="news">NEWS</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    @error('image_url')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br>
                    {{-- old('image_url')の付け方要確認 --}}
                    <input class="form-control" type="file" name="image_url" accept=".png, .jpg, .jpeg">
                </div>
                <div class="mb-3">
                    <label class="form-label">Body</label>
                    @error('body')
                        <span class="error">*{{ $message }}</span>
                    @enderror
                    <br>
                    <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto form-button">
                    <button class="btn" type="submit">CREATE</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>

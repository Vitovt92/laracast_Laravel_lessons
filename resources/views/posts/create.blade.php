<x-layout>
    <section class="py-8 max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publich New
        </h1>
        <x-panel class="">
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 font-bold text-xs text-gray-700">
                        title
                    </label>
                    <input value="{{ old('title') }}" type="text" class="border border-gray-400 p-2 w-full" name="title" id="title" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 font-bold text-xs text-gray-700">
                        Slug
                    </label>
                    <input value="{{ old('slug') }}"  type="text" class="border border-gray-400 p-2 w-full" name="slug" id="slug">
                    @error('slug')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 font-bold text-xs text-gray-700">
                        Thumbnail
                    </label>
                    <input value="{{ old('slug') }}"  type="file" class="border border-gray-400 p-2 w-full" name="thumbnail" id="thumbnail">
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 font-bold text-xs text-gray-700">
                        Excerpt
                    </label>
                    <textarea type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required
                    >{{old('excerpt')}}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 font-bold text-xs text-gray-700">
                        Body
                    </label>
                    <input value="{{ old('body') }}"  type="text" class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 font-bold text-xs text-gray-700">
                        Category
                    </label>
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') === $category->id ? 'selected' : '' }} > {{ ucwords($category->name) }} </option>

                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>

</x-layout>

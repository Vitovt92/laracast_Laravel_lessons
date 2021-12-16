<x-panel>
    <form action="/posts/{{ $post->slug }}/comments" method="post">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" alt="avatar" class="rounded-full">

            <h2 class="ml-3">Want to participate?</h2>
        </header>

        <div class="mt-6">
            <textarea required name="body" rows="5" class="w-full text-sm focul:outline-none focus:ring" placeholder="Quick, thing to say"></textarea>
            @error('body')
                <span class="text-xs text-red-500">{{ $message}}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>
                Post
            </x-submit-button>
        </div>
    </form>
</x-panel>

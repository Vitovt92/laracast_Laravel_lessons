<x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : ucwords("categories") }}

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"></x-icon>
                </button>
            </x-slot>
            <x-dropdown-item href="/" :active="!request('category')">
                All
            </x-dropdown-item>
            <!-- <a href="/" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:text-white focus:bg-blue-500 hover:text-white focus:text-white"> All </a> -->

            @foreach ( $categories as $category )
                <x-dropdown-item
                    href="/?category={{ $category->slug }}"
                    :active="request('category') === $category->slug"
                    >
                        {{ ucwords($category->name) }}
                </x-dropdown-item>
            @endforeach
        </x-dropdown>


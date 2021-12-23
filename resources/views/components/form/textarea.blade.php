@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <textarea type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        required
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}"></x-form.error>

</x-form.field>

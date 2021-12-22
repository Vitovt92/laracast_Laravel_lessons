@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <input value="{{ old($name) }}"
        type="{{ $type }}"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes }}
        >

    <x-form.error name="{{ $name }}"></x-form.error>

</x-form.field>

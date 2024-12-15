@props(['name', 'label', 'value' => '', 'placeholder' => '', 'type' => 'text'])

<div class="flex flex-col gap-2">
    <label class="font-poppins text-xl" for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        class="border border-gray-300 rounded-lg px-5 py-3 w-full placeholder:text-gray-400 font-poppins text-xl focus:outline-none "
        {{ $attributes->merge(['class' => 'form-control']) }}>
</div>

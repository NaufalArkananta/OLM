@props(['name', 'label', 'value' => 0, 'placeholder' => 'Masukkan Jumlah', 'type' => 'number'])

<div class="flex flex-col gap-2">
    <label class="font-poppins text-xl" for="{{ $name }}">{{ $label }}</label>
    <div class="flex items-center rounded-lg py-1 px-4 w-full bg-white ">
        <!-- Decrement Button -->
        <button type="button" onclick="decrement('{{ $name }}')"
            class="bg-sky-600 text-white rounded-md px-4 py-2 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300">
            &#8722;
        </button>

        <!-- Input Field -->
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="text-center w-full font-poppins text-xl text-gray-700 placeholder:text-gray-400 border-none focus:outline-none focus:ring-0"
            readonly>

        <!-- Increment Button -->
        <button type="button" onclick="increment('{{ $name }}')"
            class="bg-sky-600 text-white rounded-md px-4 py-2 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300">
            &#43;
        </button>
    </div>
</div>

<script>
    function increment(id) {
        let input = document.getElementById(id);
        input.value = parseInt(input.value) + 1;
    }

    function decrement(id) {
        let input = document.getElementById(id);
        if (parseInt(input.value) > 0) { // Prevent going below zero
            input.value = parseInt(input.value) - 1;
        }
    }
</script>

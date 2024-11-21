@php
  $sizes = [
      'sm' => 'px-2 py-1 text-[8px] lg:text-sm',
      'md' => 'px-4 py-2 text-[10px] lg:text-base',
      'lg' => 'px-6 py-3 text-[12px] lg:text-lg',
  ];
  $sizeClass = $sizes[$size] ?? $sizes['md'];

  $colors = [
      'primary' =>
          'bg-sky-400 hover:bg-sky-500 text-white font-medium duration-300 border border-sky-400 focus:ring focus:ring-sky-200',
      'secondary' =>
          'bg-customBlue-50 hover:bg-customBlue-100 text-sky-400 font-medium duration-300 border border-sky-400 focus:ring focus:ring-sky-200',
      'white' => 'bg-white hover:bg-slate-100 text-slate-950 font-medium duration-300',
  ];
  $colorClass = $colors[$color] ?? $colors['primary'];
@endphp

<button type="{{ $type }}" onclick="{{ $onclick }}"
  class="rounded-[8px] {{ $sizeClass }} {{ $colorClass }} {{ $class }}">
  {{ $slot }}
</button>

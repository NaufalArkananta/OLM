@props(['active' => false])

<a {{ $attributes }}
  class="{{ $active ? 'bg-transparent text-sky-500 hover:text-sky-600' : 'text-dark-gray hover:text-sky-400' }} rounded-md px-3 py-2 text-xl font-medium"
  aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

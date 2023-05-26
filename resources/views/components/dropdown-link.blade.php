@props(['dropdownClasses' => 'block px-4 py-1 text-sm hover:bg-slate-100'])

<a {{ $attributes }} class="{{ $dropdownClasses }}">{{ $slot }}</a>

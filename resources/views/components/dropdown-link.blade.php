@props(['dropdownClasses' => 'block px-4 py-1 text-sm text-slate-600 hover:bg-slate-100'])

<a {{ $attributes }} class="{{ $dropdownClasses }}">{{ $slot }}</a>

@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-300 border-green-500',
        'error' => 'bg-red-300 border-red-500',
        'warning' => 'bg-orange-300 border-orange-500',
    ],
    'flashClasses' => 'flex items-center justify-between p-4 mb-8 text-sm font-semibold rounded-lg shadow-md focus:outline-none focus:ring ',
])

<section {{ $attributes->merge(['class' => " {$colors[$type]} {$flashClasses}"]) }}">
    <div class="flex items-center">
        <span>{{ $slot }}</span>
    </div>
    <button>&times;</button>


</section>

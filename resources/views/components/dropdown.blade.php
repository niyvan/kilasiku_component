@props([
    'alignment' => 'left',
    'alignmentClasses' => [
        'right' => 'right-0',
        'left' => 'left-0',
    ],
])

<div class="relative"x-data="{ open: false }" @click.outside="open =false">
    <div @click="open = !open">
        {{ $triggerD }}
    </div>

    <div class="{{ $alignmentClasses[$alignment] }} absolute bg-white mt-2 px-4 py-4 rounded shadow-md w-40"
        x-show="open" x-transition:enter="transition transform duration-300"
        x-transition:enter-start=" opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition transform duration-300 " x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
        {{ $slot }}
    </div>
</div>

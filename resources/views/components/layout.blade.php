<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="bg-gray-700 text-white px-6 py-4 " x-data="{ open: false }">
        <div class="flex justify-between items-center">
            <h1 class="font-bold tracking-widest uppercase">Kilasiku</h1>
            <nav class="hidden md:flex">
                <x-nav-link route='home'>Home</x-nav-link>
                <x-nav-link route='testimonials'>Testimonials</x-nav-link>
                <x-nav-link route='contact'>Contacts</x-nav-link>
                <x-nav-link route='about'>About</x-nav-link>
            </nav>
            <div class="md:hidden">
                <button @click="open=!open">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:block">
                <x-dropdown alignment="right">
                    <x-slot name="triggerD">
                        <button>
                            <img src="https://placehold.jp/30x30.png" class="rounded-full border border-white"
                                alt="">
                        </button>
                    </x-slot>
                    <x-dropdown-link href="#">Account</x-dropdown-link>
                    <x-dropdown-link href="#">Support</x-dropdown-link>

                </x-dropdown>
            </div>
        </div>
        {{-- mobile menu --}}
        <nav x-show="open" class="mt-3 md:hidden">
            <x-mobile-nav-link route='home'>Home</x-mobile-nav-link>
            <x-mobile-nav-link route='contact'>Contacts</x-mobile-nav-link>
            <x-mobile-nav-link route='testimonials'>Testimonials</x-mobile-nav-link>
            <x-mobile-nav-link route='about'>About</x-mobile-nav-link>
        </nav>
    </header>

    {{ $slot }}
</body>

</html>

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
    <header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
        <h1 class="font-bold tracking-widest uppercase">Kilasiku</h1>
        <x-nav-link route='home'>Home</x-nav-link>
        <x-nav-link route='testimonials'>Testimonials</x-nav-link>
        <x-nav-link route='contact'>Contacts</x-nav-link>
        <x-nav-link route='about'>About</x-nav-link>

        <x-dropdown alignment="right">
            <x-slot name="triggerD">
                <button>
                    <img src="https://placehold.jp/30x30.png" class="rounded-full border border-white" alt="">
                </button>
            </x-slot>
            <x-dropdown-link href="#">Account</x-dropdown-link>
            <x-dropdown-link href="#">Support</x-dropdown-link>

        </x-dropdown>


    </header>

    {{ $slot }}
</body>

</html>

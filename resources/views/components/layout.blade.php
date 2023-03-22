<!doctype html>
<html lang="en" class="h-full">
<head>
    {{-- Meta information --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta name="description" content="Laravel From Scratch Blog">
    <meta name="author" content="Yigit Findik">

    {{-- Title --}}
    <title>Schedule</title>

    {{-- Links for fonts, cdn, css etc... --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
{{--    <link rel="dns-prefetch" href="//unpkg.com" />--}}
{{--    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />--}}
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="{{ asset('images/placeholder.svg') }}"
                     alt="NY's Employee Scheduler placeholder"
                     width="165"
                     height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger" class="flex items-center">
                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>
                    </x-slot>

                    @admin
                        <x-dropdown-item href="{{ route('admin.register.create') }}">Dashboard</x-dropdown-item>
                        <x-dropdown-item href="{{ route('admin.register.create') }}">Register</x-dropdown-item> <!-- TODO: route isn't correct I'm still working on this -->
                    @endadmin

                    <x-dropdown-item href="#" x-data="{}"
                                     @click.prevent="document.querySelector('#logout-form').submit()">Log Out
                    </x-dropdown-item>


                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
                <div class="pr-2 ml-3">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->profile_thumbnail) }}" alt="user photo">
                </div>
            @else
                <a href="/login" class="px-4 py-2 ml-4 text-sm text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
            @endguest
        </div>
    </nav>

    {{ $slot }}


    <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                                                                                    class="hover:underline">NY ICT</a>. All Rights Reserved.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
</section>
<x-flash/>
</body>
</html>

<!doctype html>

<title>Employee Management System</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
            <div class="flex">
                <a href="/">
                    <img src="/images/genie.jfif" alt="Genie Logo" width="60" height="60"> 
                </a>
                <h1 class="text-center font-bold text-2xl px-2">Employee Management System</h1>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                {{--@guest--}} {{-- check whether the user is logged in or not ex. !auth()->check() --}}
                    {{-- <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @endguest --}}

                @auth
                    <p>Welcome, {{ auth()->user()->username }}</p>

                    <form method="POST" action="/logout" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        @csrf

                        <button type="submit">Log Out</button>
                    </form>
                @endauth

            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-4 px-10 mt-20">
            <p class="text-sm">
                Copyright © 2016-2022 Genie InfoTech. All Rights Reserved
                </p>
        </footer>
    </section>
    
    <x-flash />

</body>

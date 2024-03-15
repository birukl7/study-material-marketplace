<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>html{
        scroll-behavior: smooth;
        
    }
    progress[value] { --color: blue; /* the progress color */ --background: lightgrey; /* the background color */ -webkit-appearance: none; -moz-appearance: none; appearance: none; border: none; width: 200px; margin: 0 10px; border-radius: 10em; background: var(--background); } progress[value]::-webkit-progress-bar { border-radius: 10em; background: var(--background); } progress[value]::-webkit-progress-value { border-radius: 10em; background: var(--color); } progress[value]::-moz-progress-bar { border-radius: 10em; background: var(--color); } label { font-size: 20px; font-weight: bold; display: block; margin: 20px 0; } 
    </style>
    
    <title>CourseMate</title>
</head>
<body class="">
    <div class=" max-w-7xl my-0 mx-auto ">
        <header class="fixed right-0 left-0 max-w-7xl my-0 mx-auto bg-white top-0 pb-3 z-30 flex justify-between pt-5 items-center">
            <h1 class="font-bold text-2xl">courseMate</h1>
            <form action="" class="relative">
                <input type="search" name="search" id="search" placeholder="search" class="rounded-full w-64 pl-3">
                <button type="submit">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="50" viewBox="0 0 50 50" class="absolute -top-1 -right-6">
                    <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
                    </svg>

                </button>
            </form>
            <nav>
                <ul class="flex ">
                    <li class=""><a href="{{ url('/#landing')}}" class="hover:text-black text-slate-500">Home</a></li>
                    <li class="ml-12"><a href="{{ url('/#materials')}}" class="hover:text-black text-slate-500">Material list</a></li>
                    <li class="ml-12"><a href="{{ url('/#market-place')}}" class="hover:text-black text-slate-500">Marketplace</a></li>
                    <li class="ml-12"><a href="#" class="hover:text-black text-slate-500">About us</a></li>
                    @if (Route::has('login'))
                <div class="ml-4 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-1 focus:rounded-sm focus:outline-black-500 flex items-center gap-x-3 ml-5">Dashboard 

                        <svg fill="none" height="15" viewBox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg"><path d="M0.978822 0.356323L0.0209961 0.643671L3.12789 11H14.9999V4.5C14.9999 3.11929 13.8806 2 12.4999 2H1.47192L0.978822 0.356323Z" fill="black"/><path clip-rule="evenodd" d="M5.5 12C4.67157 12 4 12.6716 4 13.5C4 14.3284 4.67157 15 5.5 15C6.32843 15 7 14.3284 7 13.5C7 12.6716 6.32843 12 5.5 12ZM5 13.5C5 13.2239 5.22386 13 5.5 13C5.77614 13 6 13.2239 6 13.5C6 13.7761 5.77614 14 5.5 14C5.22386 14 5 13.7761 5 13.5Z" fill="black" fill-rule="evenodd"/><path clip-rule="evenodd" d="M12.5 12C11.6716 12 11 12.6716 11 13.5C11 14.3284 11.6716 15 12.5 15C13.3284 15 14 14.3284 14 13.5C14 12.6716 13.3284 12 12.5 12ZM12 13.5C12 13.2239 12.2239 13 12.5 13C12.7761 13 13 13.2239 13 13.5C13 13.7761 12.7761 14 12.5 14C12.2239 14 12 13.7761 12 13.5Z" fill="black" fill-rule="evenodd"/></svg>
                        <span> 1 </span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </ul>
            </nav>
        </header>
        <div>
        @yield('content')
        </div>
        <footer class="flex mb-10 mt-10">
            <div class="w-60">
            <h1 class="font-bold text-2xl mb-2">courseMate</h1>
                <p class="mb-2 ">No more time spending looking for study materials. All is here</p>
                <address>
                    <div class="font-semibold">
                        <a href="#">+251(34356856)</a>
                        <a href="#">mobile@number.com</a>
                    </div>
                </address>
            </div>

            <ul class="mx-16">
                <li class="text-xl font-semibold mb-2">Quick Links</li>
                <li>About</li>
                <li>Career</li>
                <li>Blog</li>
                <li>Pricing</li>
            </ul>

            <ul class="mr-16">
                <li class="text-xl font-semibold mb-2">Resources</li>
                <li>Materials</li>
                <li>Members</li>
                <li>sellers</li>
                <li>FAQs</li>
            </ul>

            <ul>
                <li class="text-xl font-semibold mb-2">Support</li>
                <li>Forums</li>
                <li>Documentation</li>
                <li>Terms</li>
                <li>Community</li>
            </ul>
        </footer>
    </div>
    
</body>
</html>
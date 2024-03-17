<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @auth()
                <div class="p-6 text-gray-900 ">
                    {{ __("You're logged in!") }}
                </div>
                @else
                <div class="p-6 text-gray-900 ">
                    {{ __("You're not logged in!") }}
                </div>
                @endauth
            </div>
        </div>
    </div>

    <div class=" flex flex-col justify-center pb-60">
        <div class="border-b-1 border-slate-400 border-b flex justify-between py-10 items-center px-5">
            <div class="flex items-center gap-x-5">
                <div class="overflow-hidden rounded-full">
                    <img src="/images/profile-pic.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold">{{ auth()->user()->name }}</h2>
                    <div class="flex gap-x-2">
                        <img src="/images/rating-40.png" class="w-20" alt="">
                        <span>4.10 (<span>20</span>) Ratings</span>
                    </div>
                </div>
            </div>
            <a href={{ url('resources/create')}}>
                <div class="">
                    <button class="outline p-3 outline-1 hover:bg-black hover:outline-none hover:text-slate-100 transition duration-500 ease-in-out rounded-xl">Sell a material</button>
                </div>
            </a>
        </div>
        <div class="flex">
            <ul class="w-1/4 flex flex-col border-r border-slate-400 py-5">
                <li  class="w-full px-10 hover:bg-slate-200 hover:text-slate-inherit py-3 text-md rounded-md"><a href="/profile">My profile</a></li>
                <li class="w-full px-10 hover:bg-slate-200 hover:text-slate-inherit py-3 text-md rounded-md"><a href="/profile">Edit profile</a></li>
                <li class="w-full px-10 hover:bg-slate-200 hover:text-slate-inherit py-3 text-md rounded-md"><a href="#">Reviews</a></li>
                <hr class="h-0.5 bg-slate-400">
                <li class="w-full px-10 hover:bg-slate-200 hover:text-slate-inherit py-3 text-md rounded-md"><a href="#">Achevments</a></li>
                <li class="w-full px-10 hover:bg-slate-200 hover:text-slate-inherit py-3 text-md rounded-md"><a href="{{ route('logout')}}">Logout</a></li>
            </ul>
            <div class="flex-1">
                <div class="p-3 ">
                    <h1 class="text-xl font-semibold">Materials Dashboard</h1>
                    <ul class="flex justify-start pt-5 gap-x-12">
                        <li class="hover:text-black text-slate-700"><a href="#">Purchased Materials</a></li>
                        <li class="hover:text-black text-slate-700"><a href="#sold-materials">Sold Materials</a></li>
                        <li class="hover:text-black text-slate-700"><a href="#">Posted Materials</a></li>
                    </ul>
                </div>
                <div class="grid grid-cols-3 p-5 gap-5">
                    
                        @foreach ($resources as $resource)

                               
                           @include('resource.partials.item-card', ['resource' => $resource]) 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


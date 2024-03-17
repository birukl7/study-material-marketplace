@extends('layouts.layout')
@section('content')
<div class="pt-20">
    <div class="flex ">
        <div class="">
            <div class="">
                <img src="/images/math-common.svg" class="" alt="">
            </div>
            <div >
                <ul class=" flex justify-start gap-x-16 p-4 py-5 border-b border-slate-400">
                    <li><a href="#material-info" class="hover:text-black text-slate-700">Material info</a></li>
                    <li><a href="#reviews" class="hover:text-black text-slate-700">Reviews</a></li>
                    <li><a href="#" class="hover:text-black text-slate-700">Announcements</a></li>
                </ul>
            </div>

            <section class="p-4 b" id="material-info">
                <h1 class="text-xl font-bold py-3">About Material</h1>
                <p class="mb-0.5"><strong class="font-semibold">Are you new to PHP or need a refresher?</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, ullam?</p>
                <p class="mt-2"><strong class="font-semibold">Know PHP basics and you can do whatever you ever wanted</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, reiciendis.</p>
                <p class="mt-2"><strong class="font-semibold">I will hold you in the name of love.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, architecto!</p>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repudiandae facilis et aperiam esse molestias eos, consequatur quisquam reprehenderit incidunt! Impedit ut non excepturi molestiae ab natus necessitatibus quod dolorum.</p>
            </section>

            <section class="flex  flex-col  " id="reviews">
                <div class="flex items-center outline outline-1 p-3 rounded-lg">
                    <div class="flex p-4 flex-col   gap-y-1">
                        <h1 class="text-6xl">4.5</h1>
                        <div >
                            <img src="/images/rating-45.png" alt="" class="w-24">
                        </div>
                        <span><strong class="">5</strong>&nbsp;Reviews</span>
                    </div>
                    <div class="flex-1">
                        <ul>
                            <li class="flex items-center gap-x-3">5 <div class="bg-blue-600 h-2.5 rounded-full w-progress-100"  max="100"></div></li>
                            <li class="flex items-center gap-x-3">4 <div class="bg-blue-600 h-2.5 rounded-full w-progress-4"  max="100"></div></li>
                            <li class="flex items-center gap-x-3">3 <div class="bg-blue-600 h-2.5 rounded-full w-progress-20"  max="100"></div></li>
                            <li class="flex items-center gap-x-3">2 <div class="bg-blue-600 h-2.5 rounded-full w-progress-11"  max="100"></div></li>
                            <li class="flex items-center gap-x-3">1 <div class="bg-blue-600 h-2.5 rounded-full w-progress-7"  max="100"></div></li>
                        </ul>
                    </div>
                    
                </div>


                <button class="flex items-center p-5 gap-x-2 hover:gap-x-6 transition-all duration-500 ease-in-out" id="rate-this">
                    <span>Rate this material</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </button>
                <div class="hidden" id="rate-me">
                <div>
                    <div class="flex items-center gap-x-4">
                        <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                    </div>
                    <span class="pl-12 text-sm">Reviews are public and include your accout and device info.</span>
                    <div class="p-5">
                        <div class="flex gap-x-2">
                            <img src="/images/hollow-start.png" class="w-10 cursor-pointer js-stars" alt="">
                            <img src="/images/hollow-start.png" class="w-10 cursor-pointer js-stars" alt="">
                            <img src="/images/hollow-start.png" class="w-10 cursor-pointer js-stars" alt="">
                            <img src="/images/hollow-start.png" class="w-10 cursor-pointer js-stars" alt="">
                            <img src="/images/hollow-start.png" class="w-10 cursor-pointer js-stars" alt="">
                        </div>
                        <form action="">
                            <input type="number" name="rating" id="rating-number" class="w-12 rounded-md h-auto " max="5" min="1">
                            <textarea  class='border-gray-300 h-40 w-full focus:border-indigo-500 focus:ring-indigo-500 mt-4 rounded-md shadow-sm' placeholder="Describe your experience (optional)"></textarea>
                            <button class='inline-flex items-center px-4 py-2 bg-gray-800  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150' type="submit">Post</button>
                        </form>
                    </div>
                </div>




                <div class=" p-4 overflow-hidden h-rating js-review">

                    <div class="my-4">
                        <div class="flex items-center gap-x-4">
                            <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div><img src="/images/rating-50.png" class="w-20" alt=""></div>
                            <span class="text-sm">December 11, 2021</span>
                        </div>
                        <div class="p-4">
                            <p>Incredible experience and beautiful UI. Love the gradient and the Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, amet!</p>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="flex items-center gap-x-4">
                            <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div><img src="/images/rating-50.png" class="w-20" alt=""></div>
                            <span class="text-sm">December 11, 2021</span>
                        </div>
                        <div class="p-4">
                            <p>Incredible experience and beautiful UI. Love the gradient and the Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, amet!</p>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="flex items-center gap-x-4">
                            <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div><img src="/images/rating-50.png" class="w-20" alt=""></div>
                            <span class="text-sm">December 11, 2021</span>
                        </div>
                        <div class="p-4">
                            <p>Incredible experience and beautiful UI. Love the gradient and the Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, amet!</p>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="flex items-center gap-x-4">
                            <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div><img src="/images/rating-50.png" class="w-20" alt=""></div>
                            <span class="text-sm">December 11, 2021</span>
                        </div>
                        <div class="p-4">
                            <p>Incredible experience and beautiful UI. Love the gradient and the Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, amet!</p>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="flex items-center gap-x-4">
                            <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                            <strong>Biruk Lemma</strong>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div><img src="/images/rating-50.png" class="w-20" alt=""></div>
                            <span class="text-sm">December 11, 2021</span>
                        </div>
                        <div class="p-4">
                            <p>Incredible experience and beautiful UI. Love the gradient and the Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, amet!</p>
                        </div>
                    </div>

                </div>
            </section>
            <div class="flex justify-center mt-5">
                <button class="p-2 pt-3 pb-3 bg-slate-100 outline outline-1 rounded-md " id="rating-more">Show more</button>
            </div>

        </div>

        <div class="w-8/12  p-5 pt-0 pr-0 pl-0 outline outline-1 outline-slate-200">
            <div class="bg-gray-50 p-3">
                <h1 class="font-semibold text-2xl">Programming II</h1>
                <div>
                    <div class="flex flex-col w-64 my-5 mx-auto">
                        <a href="/purchase">
                        <button class="bg-black text-white px-3 py-2 rounded-xl">Purchase now</button>
                        </a>
                        <p class="mt-3">Purchase and access this material</p>
                    </div>
                </div>
            </div>

            <div class="p-5 ">
                <span class="mb-4">A course by</span>
                <div class="flex items-center gap-x-4 mt-3">
                    <div class="rounded-full overflow-hidden"><img src="/images/profile-pic.jpg" alt="" class="w-10 h-10 object-cover rounded-full "></div>
                    <strong>Biruk Lemma</strong>
                </div>
                <hr class="bg-black h-0.5 w-full mt-6">
            </div>

            <div class="p-5 pt-0">
                <h1 class="font-semibold text-xl mb-5">Material Includes</h1>
                <ul class="list-style pl-7"> 
                    <li class=" pb-3 list-disc">Php course</li>
                    <li class=" pb-3 list-disc">Civil Enginnering</li>
                    <li class=" pb-3 list-disc">Materials Building</li>
                    <li class=" pb-3 list-disc">Cement</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/rating.js')}}"></script>
@endsection

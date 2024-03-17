@extends('layouts.layout')
@section('content')
<main class="mt-10">
    <section class="flex h-screen " id="landing">
        <div class=" w-1/2 flex flex-col justify-center p-3 pl-8">
            <h1 class="text-7xl font-semibold">A broad selection of Learning materials</h1>
            <p class="pt-5 text-lg">Choose from 2500 online materials with new additions published each weeek.</p>
            <div class="mt-10">
                <a href="{{ url('/resources/create')}}">
                    <button class="outline outline-1 rounded-full py-2 px-6 mr-3 text-white bg-black hover:shadow-xl transition-all duration-500 ease-in-out">Sell Materials</button>
                </a>

                <button class="outline outline-1 rounded-full py-2 px-6 hover:px-8 transition-all duration-500 ease-in-out"><a href="#materials">Purchase Material</a></button>
            </div> 
        </div>
        <div class=" w-1/2  flex items-center">
            <img src="{{ URL('images/hero-image.svg')}} " class="w-full" alt="">
        </div>
    </section>

    <section id="materials" class="pt-20">
        <div class=" mt-10">
            <h2 class="text-center font-bold text-4xl pt-5">Featured Materials</h2>
            <p class="text-center p-5 text-xl  w-8/12 my-0 mx-auto">Learning often happens in classrooms but it doesn't have to. use CourseMaterial to crack those final questions.</p>
        </div>
        <div id="card-main-container " class="grid grid-cols-4 gap-5 p-3 bg-slate  js-container h-material  overflow-hidden pt-2 transition-all duration-1000 ease-in-out">

            


            {{-- <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out pb-1 h-cards">
                <div>
                <img src="/images/examination-1.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-40.png" alt="" class="w-28">
                        <span class="font">4</span>
                        <span>(5)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                    <a href="{{ url('resource/detail')}}"><strong class="text-xl">Programming II</strong></a>
                        <span>final exam</span>
                        <span id="course"> <strong>Course:</strong> Introduction to programing</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Logos</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div> --}}

            @foreach ($resources as $resource)
               <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out pb-1 h-cards">
                <div>
                <img src="/images/examination-1.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-40.png" alt="" class="w-28">
                        <span class="font">4</span>
                        <span>(5)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                    <a href="{{ url('resource/detail')}}"><strong class="text-xl"> {{$resource->title}} </strong></a>
                        <span>{{$resource->description}}exam</span>
                        <span id="course"> <strong>Course:</strong> {{$resource->category->name ?? 'course name'}}</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">{{$resource->seller->name}}</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div> 
            @endforeach

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out pb-1 h-cards">
                <div>
                <img src="/images/examination-1.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-40.png" alt="" class="w-28">
                        <span class="font">4</span>
                        <span>(5)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Programming II</strong>
                        <span>final exam</span>
                        <span id="course"> <strong>Course:</strong> Introduction to programing</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Logos</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>


            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out pb-1 h-cards">
                <div>
                <img src="/images/examination-1.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-40.png" alt="" class="w-28">
                        <span class="font">4</span>
                        <span>(5)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Programming II</strong>
                        <span>final exam</span>
                        <span id="course"> <strong>Course:</strong> Introduction to programing</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Logos</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>


            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">50 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">25 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">25 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out h-cards">
                <div>
                <img src="/images/examination.jpg" alt="" class="w-full">
                </div> 
                <div>
                    <div class="p-3 flex gap-3 ">
                        <img src="/images/rating-45.png" alt="" class="w-28">
                        <span class="font">4.5</span>
                        <span>(3)</span>
                    </div>
                    <div class="flex flex-col pl-8">
                        <strong class="text-xl">Applied Math II</strong>
                        <span>Mid exam</span>
                        <span id="course"> <strong>Course:</strong> Applied Math II</span>
                    </div>
                    <div class="flex p-3 pl-6 items-center ">
                        <div class="rounded-full overflow-hidden">
                            <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
                        </div>
                        <div>
                        <span class="ml-3">By</span>
                        <strong class="">Bezawit Edilu</strong>
                        </div>
                    </div>
                    <hr class="border-slate-400 mx-4 ">
                    <div class="flex justify-between items-center p-3 pl-6">
                        <strong class="text-lg">25 birr</strong>
                        <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8"> Add to cart</button>
                    </div>
                </div>
            </div>
            

        </div>
        <div class="flex justify-center mt-5">
            <button class="outline outline-1 p-2 rounded-full  transition-all duration-500 ease-in-out px-8 hover:px-10" id="browse-btn"
            > Browse All Materials</button>
        </div>
            
    </section>

    <section class="flex justify-around py-32" id="market-place">
        <div class="flex flex-col items-center ">
            <img src="/images/users.svg" class="w-32" alt="">
            <h4 class="text-4xl font-semibold">2,345</h4>
            <p>Buyers</p>
        </div>
        <div class="flex flex-col items-center ">
            <img src="/images/universities.svg" class="w-32" alt="">
            <h4 class="text-4xl font-semibold">2,500</h4>
            <p>Universities</p>
        </div>
        <div class="flex flex-col items-center ">
            <img src="/images/sellers.svg" class="w-32" alt="">
            <h4 class="text-4xl font-semibold">1,500</h4>
            <p>sellers</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="/images/materials.svg" class="w-32" alt="">
            <h4 class="text-4xl font-semibold">254</h4>
            <p>Materials</p>
        </div>
    </section>

    <section class="grid justify-around py-20 grid-cols-4 gap-y-10 gap-x-12" id="material-list">
        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/architect.svg" class="w-24" alt="">
            <div  class="ml-5">
                <h4 class="text-2xl font-semibold">Architecture</h4>
                <p><span>12</span> Materials</p>         
            </div>

        </div>

        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/chemical.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Chemical Engineering</h4>
                <p><span>12</span> Materials</p>         
            </div>

        </div>

        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/electrical.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Electrical Engineering</h4>
                <p><span>12</span> Materials</p>         
            </div>

        </div>

        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/electro-mechanical.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Electro Mechanical</h4>
                <p><span>12</span> Materials</p>         
            </div>

        </div>



        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/environmental.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3 pr-2">Environmental</h4>
                <p><span>5</span> Materials</p>         
            </div>

        </div>

        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/mechanical.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Mechanical Enginnering</h4>
                <p><span>12</span> Materials</p>         
            </div>

        </div>
        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/math-common.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Common Course</h4>
                <p><span>8</span> Materials</p>         
            </div>

        </div>

        <div class="flex items-center bg-slate-200 p-3  ">
            <img src="/images/sofware.svg" class="w-24" alt="">
            <div  class="ml-5 ">
                <h4 class="text-2xl font-semibold pb-3">Software Enginnering</h4>
                <p><span>18</span> Materials</p>         
            </div>

        </div>
        
    </section>
</main>
<script src="{{ asset('/js/script.js')}}"></script>
@endsection

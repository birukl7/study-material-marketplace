<div class="rounded-lg overflow-hidden bg-shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out">
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
            <strong class="text-xl">{{ $resource->title }}</strong>
            <span>{{$resource->description}}</span>
            <span id="course"> <strong>Course:</strong> {{ $resource->category->name ?? 'course' }}</span>
        </div>
        <div class="flex p-3 pl-6 items-center ">
            <div class="rounded-full overflow-hidden">
                <img src="/images/profile-pic.jpg" alt="" class="w-12 h-12 object-cover rounded-full">
            </div>
            <div>
                <span class="ml-3">By</span>
                <strong class="">{{ Auth::user()->name }}</strong>
            </div>
        </div>
        <hr class="border-slate-400 mx-4 ">
        <div class="flex justify-between items-center p-3 pl-6">
            <button class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8">Open file</button>
        </div>
    </div>
</div>

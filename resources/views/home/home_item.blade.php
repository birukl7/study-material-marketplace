<div
    class="rounded-lg overflow-hidden bg shadow-2xl bg-slate-100 hover:-translate-y-3 transition-all duration-300 ease-in-out pb-1 h-cards relative">
    <!-- Price on Image -->
    <div class="absolute top-2 right-2 bg-black text-white px-2 py-1 rounded">
        <strong>50 birr</strong>
    </div>
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
            <span>{{$resource->description}}</span>
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
            @php
            $id = $resource->id;
            @endphp
            <a href="{{url("/resources/{$id}")}}" <button
                class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-4">
                Preview
                </button>
            </a>

            <form action="{{ route('purchases.store')}}" method="POST">
            @csrf
            <input type="hidden" value="{{$resource->id}}">
                <button type="submit" class="outline outline-1 p-2 rounded-md  bg-black text-slate-100 hover:bg-transparent hover:text-inherit  transition-all duration-500 ease-in-out px-8">
                Buy
                </button>
            </form>
        </div>
    </div>
</div>
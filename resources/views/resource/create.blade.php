@extends('layouts.layout')

@section('content')
<div class="pt-24">
    <form action="{{ route('resources.store')}}" method="POST" class="flex flex-col" enctype="multipart/form-data">
        @csrf
        <!-- CSRF token for Laravel -->
        <label for="title" class="font-semibold  flex items-center"><span class="mr-5 flex items-center">Title <sup
                    class="text-red">*</sup></span>
            <input type="text" id="title" name="title" required value="{{ old('title')}}"
                class='border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm  w-full'></label>
        @error('title')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror


        <label for="description" class="font-semibold">Description<sup>*</sup></label>
        <textarea id="description" name="description" rows="4" required value="{{ old('description') }}"
            class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></textarea>

        @error('description')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror

        <label for="price" class="font-semibold">Price <sup>*</sup> <input type="number" id="price" name="price"
                required value="{{ old("price") }}"
                class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></label>
        
        @error('price')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror

        <label for="image" class="font-semibold">Thumbnail-Image<sup>*</sup> </label>
        <input type="file" id="image" name="image" accept="image/*" required><br>
        @error('image')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror

        <label for="category" class="flex gap-x-3 items-center font-semibold">Category
            <select id="category" name="category" required>
                <option value="engineering">Engineering</option>
                <option value="science">Science</option>
                <option value="software">Software</option>
            </select>
        </label>
        @error('category')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror


        <label for="course " class="flex font-semibold items-center gap-x-3">Course <input type="text" id="course"
                name="course" required value="{{ old('course') }}"
                class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></label>
        <br>
        @error('course')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror

        <label for="department" class="font-semibold flex items-start gap-x-5"> <span>Affiliated
                Department<sup>*</sup></span>
            <div class="-mt-4 flex justify-start flex-wrap gap-x-5">
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Civil Engineering">Civil Engineering </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"> <input type="checkbox"
                        name="departments[]" value="Architecture">Architecture</label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Chemical Engineering">Chemical Engineering</label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Mechanical Engineering">Mechanical Engineering </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Environmental Engineering">Environmental Engineering </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Mining Engineering">Mining Engineering </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Electrical Engineering">Electrical Engineering </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Electro-Mechanical Engineering">Electro-Mechanical Engineering
                </label>
                <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox"
                        name="departments[]" value="Software Engineering">Software Engineering </label>
            </div>
        </label>
        @error('departments[]')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror

        <label for="resource_file" class="font-semibold">Upload File<sup>*</sup> </label>
        <input type="file" id="resource_file" name="resource_file" accept="*" required><br>
        @error('resource_file')
           <div class="text-red-500"> {{ $message }} </div> 
        @enderror


        <button type="submit"
            class="bg-black text-white rounded-full py-2 px-4 transition duration-500 hover:bg-white hover:text-black w-60">
            Post
        </button>
    </form>
    @dump($errors->all())
</div>
@endsection
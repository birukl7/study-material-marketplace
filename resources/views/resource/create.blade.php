@extends('layouts.layout')

@section('content')
<div class="pt-24">
<form action="/submit-material" method="post" class="flex flex-col" enctype="multipart/form-data">
        @csrf <!-- CSRF token for Laravel -->
        <label for="title" class="font-semibold  flex items-center"><span class="mr-5 flex items-center">Title <sup class="text-red">*</sup></span>
        <input type="text" id="title" name="title" required class='border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm  w-full'></label>


        <label for="description" class="font-semibold">Description<sup>*</sup></label>
        <textarea id="description" name="description" rows="4" required class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></textarea>

        <label for="price" class="font-semibold">Price <sup>*</sup> <input type="number" id="price" name="price" required class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></label>
        

        <label for="image" class="font-semibold">Thumbnail-Image<sup>*</sup> </label>
        <input type="file" id="image" name="image" accept="image/*" required><br>

        <label for="category" class="flex gap-x-3 items-center font-semibold">Category
        <select id="category" name="category" required>
            <option value="engineering">Engineering</option>
            <option value="science">Science</option>
            <option value="software">Software</option>
        </select>   
        </label>
  

        <label for="course " class="flex font-semibold items-center gap-x-3">Course <input type="text" id="course" name="course" required class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm "></label>
        <br>

        <label for="department" class="font-semibold flex items-start gap-x-5"> <span>Affiliated Department<sup>*</sup></span> 
        <div class="-mt-4 flex justify-start flex-wrap gap-x-5">
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Civil Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"> <input type="checkbox">Architecture</label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Chemical Engineering</label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Mechanical Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Environmental Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Mining Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Electrical Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Electro-Mechanical Engineering </label>
            <label class="font-semibold text-sm flex items-center gap-x-2" for="civil"><input type="checkbox">Software Engineering </label>
        </div>
        </label>

        <label for="image" class="font-semibold">Upload File<sup>*</sup> </label>
        <input type="file" id="image" name="image" accept="*" required><br>
        

        <button type="submit" class="bg-black text-white rounded-full py-2 px-4 transition duration-500 hover:bg-white hover:text-black w-60">
        Post
        </button>
    </form>
</div>
@endsection
@extends('layouts.layout')
@section('content')
<div>
  <!-- Material Details -->
  <div class="flex justify-center mt-20 flex-col gap-y-3">
      <div class="mx-auto">
          <div><img src="/images/reading.svg" class="w-pic h-pic object-cover" alt=""></div>
      </div>
      <h1 class="mx-auto font-semibold text-xl">Programming II</h1>
      <span class=" mx-auto font-semibold">final exam</span>
      <span  class=" mx-auto"> <strong>Course:</strong> Introduction to programing</span>
      <span  class=" mx-auto"> <strong>Departement:</strong> Software Enginnering</span>
      <span  class=" mx-auto"> <strong>Price:</strong><span class="font-bold"> 50</span> birr</span>
      <span  class=" mx-auto"> <strong>Description:</strong> birr</span>
      <span  class=" mx-auto"> <strong>Category:</strong> Enginnering</span>
      <hr>
  </div>
  <button class='inline-flex items-center px-4 py-2 bg-red-700  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600  focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150 mx-auto my-0' type="submit">Delete</button>
</div>


@endsection
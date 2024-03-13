@extends('layouts.layout')
@section('content')
<div class="flex justify-center mt-20 flex-col gap-y-3">
    <div class="mx-auto">
        <div><img src="/images/reading.svg" class="w-pic h-pic object-cover" alt=""></div>
    </div>
    <h1 class="mx-auto font-semibold text-xl">Programming II</h1>
    <span class=" mx-auto font-semibold">final exam</span>
    <span  class=" mx-auto"> <strong>Course:</strong> Introduction to programing</span>
    <span  class=" mx-auto"> <strong>Departement:</strong> Software Enginnering</span>
    <span  class=" mx-auto"> <strong>Price:</strong><span class="font-bold"> 50</span> birr</span>
    <hr>
    <button class="bg-black text-white p-3 w-24 hover:w-28 mx-auto rounded-md transition-all duration-300 ease-out">Pay</button>
    
</div>
@endsection
@extends('base')

@section('title','home')

@section('content')
<img src="{{asset('image/euro.jpg')}}" class="mt-12 rounded shadow-md h-32 w-100" alt="">
  <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Paris</h1>
  <p class="text-lg text-gray-800">It's currently {{date("h:i A")}}</p>

@endsection

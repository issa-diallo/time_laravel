@extends('base')

@section('title','home')

@section('content')
  <h1>Hello World</h1>

  <p>It's currently {{date("h:i A")}}</p>

  @section('footer')
    <p>&copy; Copyright {{date("Y")}} &middot; <a href="{{ route('about')}}">About Us</a></p>
  @endsection
@endsection

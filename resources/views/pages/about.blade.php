@extends('base', ['title' => 'about'])

@section('title','about')

@section('content')
<img src="{{asset('image/jubbaagency_nametag.png')}}" class="my-12 rounded-full shadow-md h-32 w-100" alt="">

  <h2 class="mb-5 text-gray-700 ">Build with <span class="text-pink-500">&hearts;</span> by Dev junior lemon learning</h2>

  <p><a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection


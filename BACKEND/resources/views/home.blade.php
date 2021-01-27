@extends('layout/main')

@section('title', 'Himed')

@section('container')
    
<div class="container-fluid mt-5">
  <h1 style="color: pink" class="text-center"> Selamat datang {{ Auth::user()->name }}</h1>
  <hr>
  <a href="{{ route('logout')}}">Logout</a>
</div>

@endsection
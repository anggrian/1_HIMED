@extends('layout/main')

@section('title', 'Halaman | Himed')

@section('container')

<div class="container-fluid mt-5">
  <h1>Halaman</h1>
  <hr>
  <a href="{{ route('logout')}}">Logout</a>
</div>

 @endsection

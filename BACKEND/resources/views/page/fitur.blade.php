@extends('layout/main')

@section('title', 'Fitur | Himed')

@section('container')
    
<div class="container-fluid mt-5">
  {{-- <table class="table" style="width : 500px">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Gmail</th>
          <th>Pasword</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
          @foreach($user as $us)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $us->name }}</td>
          <td>{{ $us->email }}</td>
          <td>{{ $us->password }}</td>
          <td>
              <a class="btn btn-primary btn-sm" href="">EDIT</a>
              <a class="btn btn-primary btn-sm" href="">DELETE</a>
          </td>
        </tr>
        @endforeach
      </tbody>
  </table> --}}
<h1>
  ini halaman fitur
</h1>
</div>


@endsection
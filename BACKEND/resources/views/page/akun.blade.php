@extends('layout/main')

@section('title', 'Himed')

@section('container')
    
<div class="container-fluid mt-5">
    <table class="table" style="width : 500px">
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
            @foreach($akun as $akun)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $akun->nama }}</td>
            <td>{{ $akun->email }}</td>
            <td>{{ $akun->password }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="">EDIT</a>
                <a class="btn btn-primary btn-sm" href="">DELETE</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>

  <hr>
  <a href="{{ route('logout')}}">Logout</a>
</div>

@endsection
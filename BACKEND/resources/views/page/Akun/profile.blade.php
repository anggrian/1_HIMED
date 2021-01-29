@extends('layout/main')

@section('title', 'Himed')

@section('container')
    
<div class="container-fluid mt-5">
  <div class="clearfix"></div>
  <div class="row">
    <div class="x_panel">
      <div class="x_content">
          <div class="col-md-12 col-sm-12  profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i>Account Admin</i> {{ $user->id }}</h4>
                <div class="left col-md-12 col-sm-12">    
                  <h2></h2>
                  <p><strong>Nama : </strong> {{ $user->name }}</p>
                  <p><strong>Email : </strong> {{ $user->email }}</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>


@endsection
@extends('Backend_admin/Layout/main')

@section('title', 'Halaman | Himed')

@section('container')
    
<div class="container-fluid mt-5">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>INPUT DATA |<small>Tentang Himed</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('tentang')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="title_about">Judul Utama<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="title_about" id="title_about" required="required" class="form-control">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="description_about">Deskripsi Utama<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <textarea class="form-control" rows="3"  name="description_about" id="description_about"></textarea>
                </div>
                </div>
                <div class="item form-group">
                  <label for="img_about" class="col-form-label col-md-3 col-sm-3 label-align">Pilih Gambar</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="img_about" class="form-control" type="file" name="img_about">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success"  ><i class="fa fa-send"> submit</i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>SHOW DATA |<small>Tentang Himed</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              
              <table class="table">
                <thead>                      
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Utama</th>
                    <th scope="col">Descripsi Utama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($abouts as $tentang)
                  <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $tentang->title_about}}</td>
                    <td>{{ $tentang->description_about}}</td>
                    <td><img src="assets/uploads/{{ $tentang->img_about}}" width="50" alt=""></td>
                    <td>
                      <a href="" class="badge badge-success"><i class="fa fa-edit"></i></a> 

                      <form action="{{ route('delete',  $tentang->id) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button href="" class="badge badge-danger">delet<i class="fa fa-trash" ></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
@extends('Backend_admin/Layout/main')

@section('title', 'Fitur | Himed')

@section('container')

    <div class="container-fluid mt-3">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>EDIT DATA |<small>Fitur Himed</small></h2>
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                method="POST" action="{{ route('fitur.update', $features->id) }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="main_title">Judul Utama
                                        <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="main_title" id="main_title" required="required"
                                            class="form-control" value="{{ $features->main_title }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="main_description">Deskripsi Utama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" name="main_description"
                                            id="main_description"
                                            required>{{ strip_tags($features->main_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="main_description">Gambar <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <img src="../../assets/uploads/{{ $features->thumbnail }}" width="100" alt="">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="thumbnail" class="col-form-label col-md-3 col-sm-3 label-align">Pilih
                                        Gambar</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="thumbnail" class="form-control" type="file" name="thumbnail">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-send">
                                                Update</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('Backend_admin/Layout/main')

@section('title', 'Paket | Himed')

@section('container')

    <div class="container-fluid mt-3">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>INPUT DATA |<small>Fitur Himed</small></h2>
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
                                method="POST" action="{{ route('fitur') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="main_title">Judul
                                        Utama<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="main_title" id="main_title" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="main_title">Pilih
                                        Paket<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="packages_id">
                                            @foreach ($paket as $p)
                                                <option value="{{ $p->id }}">{{ $p->title_package }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="main_description">Deskripsi Utama<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" name="main_description"
                                            id="main_description"></textarea>
                                        <script>
                                            CKEDITOR.replace('main_description');

                                        </script>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="thumbnail" class="col-form-label col-md-3 col-sm-3 label-align">Pilih
                                        Gambar</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="thumbnail" class="form-control" type="file" name="thumbnail">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-send">
                                                submit</i></button>
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
                            <h2>SHOW DATA |<small>Fitur Himed</small></h2>
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
                                        <th scope="col">Paket</th>
                                        <th scope="col">Descripsi Utama</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $fitur)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $fitur->main_title }}</td>
                                            <td>{{ $fitur->title_package }}</td>
                                            <td>{{ strip_tags($fitur->main_description) }}</td>
                                            <td><img src="assets/uploads/{{ $fitur->thumbnail }}" width="50" alt=""></td>
                                            <td>
                                                <a href="{{ route('fitur.edit', $fitur->id) }}"
                                                    class="btn btn-link text-success p-0" style="font-size: 20px;"> <i
                                                        class="fa fa-edit"></i></a>
                                                <form action="{{ route('delete_fitur', $fitur->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button href="" class="btn btn-link text-danger p-0"
                                                        style="font-size: 20px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <input type="hidden" value="{{ $fitur->id }}" name="id">
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

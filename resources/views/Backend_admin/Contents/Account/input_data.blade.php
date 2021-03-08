@extends('Backend_admin/Layout/main')

@section('title', 'Akun | Himed')

@section('container')

    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                <h5 class="card-title">Lengkapi Data Akun</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('profil.create') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <input class="form-control" type="hidden" name="users_id" id="users_id" value="{{ $login->id }}"> --}}
                    <div class="form-group">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-control" name="name" id="name" value="{{ $login->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $login->email }}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telphone">Nomor Telphone</label>
                        <input type="number" class="form-control" name="telphone" id="telphone"
                            placeholder="Nomor Telphone">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir">
                    </div>

                    {{-- <input class="form-control" type="hidden" name="password" id="password"
                        value="{{ $login->password }}"> --}}

                    <div class="form-group">
                        <label class="form-label w-100" for="img_profile">Pilih Profil</label>
                        <input type="file" name="img_profile" id="img_profile">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>

@endsection

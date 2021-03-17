@extends('Backend_admin/Layout/main')

@section('title', 'Akun | Himed')

@section('container')

    <div class="container-fluid mt-3">
        <div class="col-12 col-xl-6" style="max-width: 100%;">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">DATA AKUN</h5>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Profil</th>
                            <th>Nama</th>
                            <th>Gmail</th>
                            <th>Nomor Telephone</th>
                            <th>Tanggal Lahir</th>
                            <th>Dibuat</th>
                            <th>Diedit</th>
                        </tr>
                    </thead>
                    @foreach ($users as $item)
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/uploads/profiles/{{ $item->img_profile }}" width="50"
                                        alt=" Image Null">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telphone }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection

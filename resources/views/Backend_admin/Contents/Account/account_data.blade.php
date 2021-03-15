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
                            <th>Edit Data</th>
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
                                <td class="table-action">
                                    <a href="{{ route('lengkapi_data') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 align-middle">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection

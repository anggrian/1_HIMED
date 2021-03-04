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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($users as $item)

                                <td>
                                    <img src="{{ asset('assets/ANGGRIAN.jpg') }}" width="48" height="48"
                                        class="rounded-circle mr-2" alt="Avatar">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>Anggr14n@gmail.com</td>
                                <td>864-348-0485</td>
                                <td>June 21, 1961</td>
                                <td>19-01-2021</td>
                                <td>19-03-2021</td>
                                <td class="table-action">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 align-middle">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg></a>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash align-middle">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg></a>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

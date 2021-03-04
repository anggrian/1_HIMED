@extends('Backend_admin/Layout/main')

@section('title', 'Akun | Himed')

@section('container')

    <div class="container-fluid mt-3">
        <div class="card mb-3">
            <div class="card-header position-relative min-vh-25 mb-7">
                <div class="bg-holder rounded-soft rounded-bottom-0"></div>
                <!--/.bg-holder-->
                <div class="avatar_buat avatar-5xl_buat avatar-profile_buat">
                    <img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('assets/ANGGRIAN.jpg') }}"
                        width="200" alt="xxxxxxxxxxxxxxxxxxxxxxxxx">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h4 class="mb-1">{{ $users->name }}<svg
                                class="svg-inline--fa fa-check-circle fa-w-16 text-primary ml-1" data-toggle="tooltip"
                                data-placement="right" title="" data-fa-transform="shrink-4 down-2"
                                aria-labelledby="svg-inline--fa-title-PNLr43yIculb" data-prefix="fas"
                                data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;" data-original-title="Verified">
                                <title id="svg-inline--fa-title-PNLr43yIculb">Verified</title>
                                <g transform="translate(256 256)">
                                    <g transform="translate(0, 64)  scale(0.75, 0.75)  rotate(0 0 0)">
                                        <path fill="currentColor"
                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                                            transform="translate(-256 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                            <!-- <small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="right" title="Verified" data-fa-transform="shrink-4 down-2"></small> Font Awesome fontawesome.com -->
                        </h4>
                        <h5 class="fs-0 font-weight-normal">{{ $users->email }}</h5>
                        <p class="text-500">Senior Software Engineer at Technext Limited</p>
                        <a href="{{ route('lengkapi_data') }}" class="btn btn-primary btn-sm px-3" type="button">Lengkapi
                            Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

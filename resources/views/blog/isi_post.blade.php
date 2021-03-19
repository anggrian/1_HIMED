@extends('template_blog.content')
	
@section('isi')


        <!-- Main SECTION -->
        <section class="hero py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 shadow content">
                        <!-- Content -->
                        @foreach ($data as $isi_post)
                        <img class="img-fluid" src="{{asset ($isi_post->gambar) }}" alt="">
                        <div class="row p-3">
                            <div class="col-sm-2">
                                <img class="img-fluid rounded-circle" src="{{asset ('$isi_post->gambar') }}" alt="" >
                            </div>
                            <div class="col-sm-10">
                                <h1>My Blog Title : Foo Hah Huh Wow</h1>
                            </div>
                        </div>
                        <div class="badge px-3 secondary-color">
                            <a href="#"> Technology</a>
                            <a href="#"> Programing</a>
                        </div>
                            
                        <div class="p-content p-4">
                            {!! $isi_post->content !!}
                        </div>

                        @endforeach
                    </div>
                    <div class="col-lg-4">
                        <!-- Social Links -->
                        <div class="social-links row text-center">
                            <div class="col-sm-4  py-5">
                                <a class="social-link w-100" href="">
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a> 
                            </div>
                            <div class="col-sm-4  py-5 secondary-color">
                                <a class="social-link w-100" href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a> 
                            </div>
                            <div class="col-sm-4  py-5">
                                <a class="social-link w-100" href="">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a> 
                            </div>
                        </div>
                        <h4 class="aside-heading mt-4 mb-3 pl-2">Popular Posts</h4>
                        <div class="hero-post shadow mb-3">
                            <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                            <div class="hero-post-badges text-center">
                                <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                <a class="p-2 px-3" href="#"> Technology</a>
                            </div>
                            <div class="hero-post-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/our-services/s1.png') }}">
                                    </div>
                                    <div class="col-sm-9">
                                        <h3>MY BLOG POST .... Mantap Tahunya.</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-post shadow mb-3">
                            <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                            <div class="hero-post-badges text-center">
                                <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                <a class="p-2 px-3" href="#"> Technology</a>
                            </div>
                            <div class="hero-post-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/our-services/s1.png') }}">
                                    </div>
                                    <div class="col-sm-9">
                                        <h3>MY BLOG POST .... Mantap Tahunya.</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-post shadow mb-3">
                            <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                            <div class="hero-post-badges text-center">
                                <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                <a class="p-2 px-3" href="#"> Technology</a>
                            </div>
                            <div class="hero-post-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/our-services/s1.png') }}">
                                    </div>
                                    <div class="col-sm-9">
                                        <h3>MY BLOG POST .... Mantap Tahunya.</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-post shadow mb-3">
                            <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                            <div class="hero-post-badges text-center">
                                <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                <a class="p-2 px-3" href="#"> Technology</a>
                            </div>
                            <div class="hero-post-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/our-services/s1.png') }}">
                                    </div>
                                    <div class="col-sm-9">
                                        <h3>MY BLOG POST .... Mantap Tahunya.</h3>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fb-comments" data-href="http://127.0.0.1:8000/isi-post/musik" data-width="" data-numposts="5"></div>
                        
                        {{-- input Komentar
                        <div class="card my-4">
                            <h5 class="card-header">leave a comment :</h5>
                            <div class="card-body">
                                <form action="" method="">
                                    @csrf
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <p>Name : </p>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group"></div>
                                    <p>Comment : </p>
                                    <input type="text" class="form-control" name="komentar">
                                    <input class="btn btn-primary" type="submit"></button>
                                </form>
                            </div>
                        </div>
                        {{-- Komentar --}}
                        {{-- <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-cicle" src="" alt="">
                            <div class="media-body">
                                <h5 class="mt-0" > Comment Name </h5>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem officiis accusamus ipsa incidunt? Nulla est ea nesciunt quam amet architecto, aspernatur dignissimos quis deleniti excepturi reiciendis nostrum asperiores optio eveniet?
                            </div>
                        </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
 @endsection    
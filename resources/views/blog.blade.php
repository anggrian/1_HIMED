@extends('template_blog.content')
	
@section('isi')


        <!-- HERO SECTION -->
        <section class="hero py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-post shadow">
                                <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                                <div class="hero-post-badges text-center">
                                    <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                    <a class="p-2 px-3" href="#"> Technology</a>
                                </div>
                                <div class="hero-post-content">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/Our-Services/s2.png') }}">
                                        </div>
                                        <div class="col-md-10">
                                            <h2>MY BLOG POST .... Mantap Tahunya, Gak Percaya? Cobain Ajaaa!!!</h2>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                        <div class="col-lg-4">
                            <div class="hero-post shadow mb-3">
                                <img src="{{ asset('assets/frontend/img/bg/ai2.png')}}" alt="" class="img-fluid">
                                <div class="hero-post-badges text-center">
                                    <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                    <a class="p-2 px-3" href="#"> Technology</a>
                                </div>
                                <div class="hero-post-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/Our-Services/s1.png') }}">
                                        </div>
                                        <div class="col-sm-9">
                                            <h3>MY BLOG POST .... Mantap Tahunya.</h3>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-post shadow">
                                <img src="{{ asset('assets/frontend/img/bg/ai2.png') }}" alt="" class="img-fluid">
                                <div class="hero-post-badges text-center">
                                    <a class="p-2 px-3 mb-2" href="#"><i class="mr-2 fa fa-calendar-o" aria-hidden="true"></i> 15. March 2020</a>
                                    <a class="p-2 px-3" href="#"> Technology</a>
                                </div>
                                <div class="hero-post-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img alt="Authour" class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/Our-Services/s2.png') }}">
                                        </div>
                                        <div class="col-sm-9">
                                            <h3>MY BLOG POST .... Mantap Tahunya.</h3>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Main Blog Section -->
            <section class="blog-posts py-4">
                <div class="container">
                    <div class="row">
                        @foreach($data as $post_terbaru)
                        <div class="col-md-8">
                            <article class="blog-post mb-3 shadow">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img class="img-fluid postnya" href="{{ route('blog.isi',$post_terbaru->slug) }}" src="{{ $post_terbaru->gambar }}" alt=""></a>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="m-0 mt-2"><a href="{{ route('blog.isi',$post_terbaru->slug) }}">{{ $post_terbaru->judul }}</a></h3>
                                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, fugit saepe dolorem, quaerat illum voluptatibus deserunt odio neque, eaque modi quibusdam voluptatem voluptas exercitationem recusandae atque dolor. Voluptates, qui itaque.</p>
                                        <div class="badge">
                                            <a href="#">{{ $post_terbaru->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
@endsection    
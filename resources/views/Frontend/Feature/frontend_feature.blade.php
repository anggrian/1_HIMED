@extends('Frontend/Master/master')

@section('frontend')
    <!-- 3. Awal Section  A Straight Forward -->
    <section class="bub-right">
        <div class="container container-result mt-5">
            <div class="img-result">
                <img src="assets/uploads/{{ $abouts->img_about }}" alt="" class="gambar-result">
            </div>
        </div>
        <div class="container container-result mt-5">
            <div class="result">
                <h4>{{ $abouts->title_about }}</h4>
                <p>{{ strip_tags($abouts->description_about) }}</p>
                <p></p>
            </div>
        </div>
    </section>
    <!-- / 3. Akhir Section  A Straight Forward -->


@endsection

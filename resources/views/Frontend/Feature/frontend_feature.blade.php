@extends('Frontend/Master/master')

@section('frontend')
    <!-- 3. Awal Section  A Straight Forward -->
    <section class="bub-right">
        @foreach ($features as $item)

            <div class="container container-result mt-5">
                <div class="img-result">
                    <img src="../assets/uploads/{{ $item->thumbnail }}" alt="gak nampil" class="gambar-result">
                </div>
            </div>
            <div class="container container-result mt-5">
                <div class="result">
                    <h4>{{ $item->main_title }}</h4>
                    <p>{!! $item->main_description !!}</p>
                    <p></p>
                </div>
            </div>
        @endforeach
    </section>
    <!-- / 3. Akhir Section  A Straight Forward -->


@endsection

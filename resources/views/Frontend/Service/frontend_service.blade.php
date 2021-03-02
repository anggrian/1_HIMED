@extends('Frontend/Master/master')

@section('frontend')
    <!------- Bagian Section 2 Realtime live chat (features) ------->
    <section class="section-dua faq-timeline-area">
        <div class="container mt-5">
            <div class="realtime">
                <div class="realtime-col realtime-col-dua">
                    <h4>A Straight Forward Structare for Powerful Automation Results.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu.
                        Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo laboriosam, dolorum ducimus
                        aliquam consequuntur!</p>
                </div>
                <div class="realtime-col realtime-col-satu">
                    @foreach ($services as $item)

                        <div class="kolom-lom card-satu">
                            <h5>{{ $item->title_service }}</h5>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque
                                minima
                                sit amet</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!------- Bagian Akhir Section 2 ------->
@endsection

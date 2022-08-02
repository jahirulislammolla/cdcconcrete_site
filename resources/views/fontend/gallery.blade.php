@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, gallery',
        'description'=>"cdcconcrete",
        'title'=>"CDC Concrete Gallery",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'CDC Concrete Gallery',$page])
@section("content")
    <section id='gallery_section_one'>
        <div class="container">
            <h2 class="title">Video Gallery</h2>
            <div class="row text">
                <div class='row gallery-row'>
                    <div class='row justify-content-center'>
                        @foreach ($gallery_video as $item)
                            <div class="col-lg-4 col-md-6 gallery">
                                <div class='card_div'>
                                    @if(str_starts_with($item->link,'https://www.youtube.com/watch?v='))
                                    @php
                                        $video_id = explode('https://www.youtube.com/watch?v=',$item->link);
                                    @endphp
                                    <iframe src="https://www.youtube.com/embed/{{$video_id[1]}}" title="{{$item->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @elseif (str_starts_with($item->link,'https://youtu.be/'))
                                    @php
                                        $video_id = explode('https://youtu.be/',$item->link);
                                    @endphp
                                    <iframe src="https://www.youtube.com/embed/{{$video_id[1]}}" title="{{$item->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $gallery_video->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

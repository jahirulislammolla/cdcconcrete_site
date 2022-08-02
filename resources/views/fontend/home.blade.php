@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC Concrete Ltd.",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'CDC Concrete Ltd.',$page])
@section("content")
    @php
        // dd($website_info);
    @endphp
    <div id="main_section_home">
        <div class="img_div">
            <img src="{{$website_info['home_image'][1]}}" alt="{{$website_info['home_image'][0]}}" title="{{$website_info['home_image'][0]}}">
        </div>
        <div class="about_our_company">
            <div class="container">
                <h2 class="title">OUR COMPANY</h2>
                <div class="main_div">
                    <div class="col-md-6 img_div">
                        <img src="{{$website_info['company_image'][1]}}" alt="{{$website_info['company_image'][0]}}" title="{{$website_info['company_image'][0]}}">
                    </div>
                    <div class="col-md-6 text_div">
                       <div class="text">
                        {!! $website_info['about_us'][1] !!}
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_vision_mission">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mission_div">
                        <h2 class="title">VISION</h2>
                        <div class="text-center">
                            {!! $website_info['vision'][1] !!} 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="title">MISSION</h2>
                        <div class="text-center">
                            {!! $website_info['mission'][1] !!} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_main_service">
            <div class="container">
                <h2 class="title">OUR MAIN SERVICES</h2>
                <div class="row">
                    <div class="col-md-6 block_div">
                        <a href="/concrete-block" class="img_div">
                            <img src="{{$website_info['concrete_block_image'][1]}}" alt="{{$website_info['concrete_block_image'][0]}}" title="{{$website_info['concrete_block_image'][0]}}">
                        </a>
                        <div class="text">
                            <a href="/concrete-block">Concrete Block</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="/rmc-product" class="img_div">
                            <img src="{{$website_info['rmc_product_image'][1]}}" alt="{{$website_info['rmc_product_image'][0]}}" title="{{$website_info['rmc_product_image'][0]}}">
                        </a>
                        <div class="text">
                            <a href="/rmc-product">RMC Product</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our_sister_concerns">
            <div class="container">
                <h2 class="title">OUR SISTER CONCERNS</h2>
                <div class="row justify-content-center">
                    @foreach ($sister_concern as $item)
                    <div class="col-4 col-md-2 mb-3">
                        @if (isset($item->link))
                        <a href='{{$item->link}}' target="_blank" class="img_div">
                            <img src="/{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}}">
                        </a>
                        @else
                        <a href='#' class="img_div">
                            <img src="/{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}}">
                        </a>  
                        @endif
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
        <div class="our_clients">
            <div class="container">
                <h2 class="title">OUR CLIENTS</h2>
                <div class="row justify-content-center">
                    @foreach ($client as $item)
                    <div class="col-4 col-md-2 mb-3">
                        @if (isset($item->link))
                        <a href='{{$item->link}}' target="_blank" rel='nofollow' class="img_div">
                            <img src="/{{$item->image}}" alt="{{$item->name}}" title="{{$item->name}}" />
                        </a>
                        @else
                        <a href='#' rel='nofollow' class="img_div">
                            <img src="/{{$item->image}}"  alt="{{$item->name}}" title="{{$item->name}}" />
                        </a>  
                        @endif
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"Quality Control",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'Quality Control',$page])
@section("content")
    <div id="quality_control_section">
        <div class="img_div">
            <img src="{{$website_info['quality_control_image'][1]}}" alt="{{$website_info['quality_control_image'][0]}}" title="{{$website_info['quality_control_image'][0]}}">
        </div>
        <div class="qulality_control">
            <div class="container">
                <h2 class="quality_control_title">Quality Control</h2>
                <div class="main_div">
                    <div class="text">
                        {!! $website_info['quality_control'][1] !!}
                    </div>
                </div>
                <h4 class="title_2">Lab Facility</h4>
                <div class="main_div">
                    <div class="text">
                        {!! $website_info['lab_facility'][1] !!}
                    </div>
                </div>
                <h4 class="title_2">Buet Test</h4>
                <div class="main_div">
                    <div class="text">
                        {!! $website_info['buet_test'][1] !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-start">
            <div>
                <ul>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Fineness Modulus (FM)</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Moisture Content &amp; Water Absorption&nbsp;</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Unit Weight</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Specific Gravity</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Silt &amp; Clay Content</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Gradation</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Aggregate Crushing Value (ACV)</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Los Angles Abrasion Test</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Flakiness &amp; Elongation&nbsp;</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Compressive Strength</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Fineness</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Consistency&nbsp;</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Setting Time</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Slump Test</li>
                    <li style="list-style: none;"><i class="fa fa-hand-o-right" style="color:#0099ff; padding-right:5px"></i>Admixture Test</li>
                </ul>
            </div>
        </div> --}}
    </div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush


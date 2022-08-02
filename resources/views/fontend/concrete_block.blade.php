@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"Concrete Block Product",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'Concrete Block Product',$page])
@section("content")
    <section id='concrete_block_section_one'>
        <div class="container">
            <h2 class="title">Concrete Block</h2>
            <div class="row text">
                <div class='row block-row'>
                    <div class='row justify-content-center'>

                        @foreach( $product as $item)
                            <div class="col-lg-4 col-md-6 block">
                                <div class='card card-div'>
                                    <div class='image-div'>
                                        <img class='card-img-top' src='/{{$item->image}}' alt='{{$item->name}}'>
                                    </div>
                                    <div class='content_div'>
                                        <h6 class='card_title'><b>{{$item->name}}</b></h6>
                                        <div class="block_content">
                                            <ul>
                                                <li class="d-flex align-items-start"><div class="d-inline"><div class="bullet_div"><div  class="bullet_inner"></div></div></div>{{$item->feature_1}} </li>
                                                <li class="d-flex align-items-start"><div class="d-inline"><div class="bullet_div"><div  class="bullet_inner"></div></div></div>{{$item->feature_2}} </li>
                                                <li class="d-flex align-items-start"><div class="d-inline"><div class="bullet_div"><div  class="bullet_inner"></div></div></div>{{$item->feature_3}} </li>
                                                <li class="d-flex align-items-start"><div class="d-inline"><div class="bullet_div"><div  class="bullet_inner"></div></div></div>{{$item->feature_4}} </li>
                                                <li class="d-flex align-items-start"><div class="d-inline"><div class="bullet_div"><div  class="bullet_inner"></div></div></div>{{$item->feature_5}} </li>
                                            </ul>
                                        </div>
                                        <div class='block_footer'>
                                            <div class='footer_order_now'>
                                                <a href='#' data-toggle="modal" data-target="#myModal" class='btn_order_now'>Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" style="display: none; z-index:99999;" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalCreateLabel">PLEASE CONFIRM YOUR ORDER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="modal-body">
                                <div class="row mb-3 justify-content-around">
                                    @foreach ($product_order as $item)
                                    <div class="col-md-6">
                                        <div class="contact">
                                            <div class="icon_div">
                                                <div class="contact_icon">
                                                    <i class="far fa-id-badge text-white"></i>
                                                </div>
                                            </div>
                                            <h5 class="contact_title text-center">{{$item->name}}</h5>
                                            <h6 class="contact_title text-center">{{$item->degination}}</h6>
                                            <div class="contact_desc">
                                                @isset($item->number_1)
                                                <p>Mobile: <a href="tel:+88{{$item->number_1}}">{{$item->number_1}}</a></p>
                                                @endisset
                                                @isset($item->number_2)
                                                <p>Mobile: <a href="tel:+88{{$item->number_2}}">{{$item->number_2}}</a></p>
                                                @endisset
                                                @isset($item->number_3)
                                                <p>Mobile: <a href="tel:+88{{$item->number_3}}">{{$item->number_3}}</a></p>
                                                @endisset
                                                @isset($item->number_4)
                                                <p>Mobile: <a href="tel:+88{{$item->number_4}}">{{$item->number_4}}</a></p>
                                                @endisset
                                                <p>WhatsApp: <a href="https://wa.me/+88{{$item->whatsapp}}">{{$item->whatsapp}}</a></p>
                                                <p>Email: <a href="mailto:{{$item->email}}">{{$item->email}}</a></p>
                                            </div>				                    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    
                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-center">
                                <div class="form-group mb-3 text-center">
                                    <button type="button" class="btn btn-info pl-3 pr-3" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

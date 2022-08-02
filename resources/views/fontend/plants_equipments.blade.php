@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, equipment',
        'description'=>"cdcconcrete",
        'title'=>"CDC Concrete Plants & Equipments",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'CDC Concrete Plants & Equipments',$page])
@section("content")
    <section id='plants_equipments_section_one'>
        <div class="container">
            <h2 class="title">Plants & Equipments</h2>
            <div class="row text">
                <div class='row equipment-row'>
                    <div class='row justify-content-center'>

                        @foreach ($equipment as $item)
                            <div class="col-lg-4 col-md-6 equipment">
                                <div class='card card_div'>
                                    <div class='image_div'>
                                        <img class='card_img_top' src='/{{$item->image}}' alt='app'>
                                    </div>
                                    <div class='content_div'>
                                        <h5 class='card_title'><b>{{$item->name}}</b></h5>
                                        <div class="description">
                                            <div class="text">
                                                {{$item->description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $equipment->links() }}
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
                                    <div class="col-md-5">
                                        <div class="contact">
                                            <div class="icon_div">
                                                <div class="contact_icon">
                                                    <i class="far fa-id-badge text-white"></i>
                                                </div>
                                            </div>
                                            <h4 class="contact_title text-center">Head of the Sales</h4>
                                            <div class="contact_desc">
                                                <p class="contact_name">Md. Mxyz</p>
                                                <p>Phone: +880XXXXXXXXXXXX</p>
                                                <p>WhatsApp: +880XXXXXXXXXXXX</p>
                                                <p>Email: head@cdcconcrete.com</p>
                                            </div>				                    
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="contact">
                                            <div class="icon_div">
                                                <div class="contact_icon">
                                                    <i class="far fa-id-badge text-white"></i>
                                                </div>
                                            </div>
                                            <h4 class="contact_title text-center">Head of the Sales</h4>
                                            <div class="contact_desc">
                                                <p class="contact_name">Md. Mxyz</p>
                                                <p>Phone: +880XXXXXXXXXXXX</p>
                                                <p>WhatsApp: +880XXXXXXXXXXXX</p>
                                                <p>Email: head@cdcconcrete.com</p>
                                            </div>				                    
                                        </div>
                                    </div>
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

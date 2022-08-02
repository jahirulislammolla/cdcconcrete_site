@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC Contact",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'CDC Contact Page',$page])
@section("content")
<section id='contact_section_one'>
    <div class='container'>
        <h2>Contact Us</h2>
        <h6 class="text-center header_text col-lg-7 col-md-8 m-auto">Contact us for any comments, suggestions, complaints or assistance.<br/> We sincerely await your response. </h6>
        <div class="row col-lg-11 col-md-11 m-auto justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="top_section"></div>
                <div class="contact_us all_div">
                    <h4>Contact </h4>
                    <div class="inner_div">
                        @if(isset($website_info["mobile_number"]))
                            @if (str_starts_with($website_info["mobile_number"][1],'88'))
                            <h6>
                                Mobile : <a href="tel:+{{$website_info["mobile_number"][1]}}">{{$website_info["mobile_number"][1]}}</a> 
                            </h6>
                            @else
                            <h6>
                                Mobile : <a href="tel:+88{{$website_info["mobile_number"][1]}}">{{$website_info["mobile_number"][1]}}</a>
                            </h6>
                            @endif
                        @endif
                        @if(isset($website_info["mobile_number_2"]))
                            @if (str_starts_with($website_info["mobile_number_2"][1],'88'))
                            <h6>
                                Mobile : <a href="tel:+{{$website_info["mobile_number_2"][1]}}"> {{$website_info["mobile_number_2"][1]}}</a>
                            </h6>
                            @else
                            <h6>
                                Mobile : <a href="tel:+88{{$website_info["mobile_number_2"][1]}}"> {{$website_info["mobile_number_2"][1]}}</a>
                            </h6>
                            @endif
                        @endif

                        @if(isset($website_info["whatsapp_number"]) )
                            @if(str_starts_with($website_info["whatsapp_number"][1],'88'))
                            <h6>WhatsApp : <a href="https://wa.me/+{{$website_info["whatsapp_number"][1]}}" target="_blank">{{$website_info["whatsapp_number"][1]}}</a></h6>
                            @else
                            <h6>WhatsApp : <a href="https://wa.me/+88{{$website_info["whatsapp_number"][1]}}" target="_blank">{{$website_info["whatsapp_number"][1]}}</a></h6>
                            @endif
                        @endif

                    
                        @if (isset($website_info["fb_messanger_link"]))
                            @if (str_starts_with($website_info["fb_messanger_link"][1], 'http'))
                            <h6>Messenger : <a href="{{$website_info["fb_messanger_link"][1]}}" target="_blank">Cdcconcrete</a></h6>
                            @else
                                <h6>Messenger : <a href="http://{{$website_info["fb_messanger_link"][1]}}" target="_blank">Cdcconcrete</a></h6>
                            @endif
                        @endif
                        @if(isset($website_info["email_address"]))
                            <h6>Email : <a href="mailto:{{$website_info["email_address"][1]}}">{{$website_info["email_address"][1]}}</a></h6> 
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 map_location mb-3">
                <div class="top_section"></div>
                <div class="contact_address all_div">
                    <h4>
                        Address 
                    </h4>
                    <div class="p-2">
                        <div class='description pl-3 pr-3 pb-1 text-center'>
                            <h6><b>Corporate Office</b></h6>
                            @if (isset($website_info["corporate_office_address"]))
                                {{$website_info["corporate_office_address"][1]}}
                            @endif
                        </div>
                        <div class='description pl-3 pr-3 pb-1 text-center'>
                            <h6><b>Factory Office</b></h6>
                            @if (isset($website_info["office_address"]))
                                {{$website_info["office_address"][1]}}
                            @endif
                        </div>
                        {{-- <div id="contact_map" class='col-md-12'>
                            <div class="map_div">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2170.1307714939176!2d90.34084016086005!3d23.82889599327663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a743c9191%3A0x214c53a45d157437!2sCDC%20Concrete%20Ltd.!5e0!3m2!1sen!2sbd!4v1655529831941!5m2!1sen!2sbd" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 social_link mb-3">
                <div class="top_section"></div>
                <div class="contact_type all_div">
                    <h4>Social Link</h4>
                    <div class='description_share p-2'>
                        @if (isset($website_info["fb_page_link"]))
                            @if (str_starts_with($website_info["fb_page_link"][1], 'http'))
                                <a href="{{$website_info['fb_page_link'][1]}}" target='_blank'><i class="fab fa-facebook"></i></a>
                            @else
                                <a href="http://{{$website_info['fb_page_link'][1]}}" target='_blank'><i class="fab fa-facebook"></i></a>
                            @endif
                        @endif
                        @if (isset($website_info["youtube_account"]))
                            @if (str_starts_with($website_info["youtube_account"][1], 'http'))
                                <a href="{{$website_info['youtube_account'][1]}}" target='_blank'><i class="fab fa-youtube"></i></a>
                            @else
                                <a href="http://{{$website_info['youtube_account'][1]}}" target='_blank'><i class="fab fa-youtube"></i></a>
                            @endif
                        @endif
                        @if (isset($website_info["twitter_account"]))
                            @if (str_starts_with($website_info["twitter_account"][1], 'http'))
                                <a href="{{$website_info['twitter_account'][1]}}" target='_blank'><i class="fab fa-twitter"></i></a>
                            @else
                                <a href="http://{{$website_info['twitter_account'][1]}}" target='_blank'><i class="fab fa-twitter"></i></a>
                            @endif
                        @endif
                        @if (isset($website_info["linkedin_account"]))
                            @if (str_starts_with($website_info["linkedin_account"][1], 'http'))
                                <a href="{{$website_info['linkedin_account'][1]}}" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                            @else
                                <a href="http://{{$website_info['linkedin_account'][1]}}" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                            @endif
                        @endif
                        @if (isset($website_info["instagram_account"]))
                            @if (str_starts_with($website_info['instagram_account'][1], 'http'))
                                <a href="{{$website_info['instagram_account'][1]}}" target='_blank'><i class="fab fa-instagram"></i></a>
                            @else
                                <a href="http://{{$website_info['instagram_account'][1]}}" target='_blank'><i class="fab fa-instagram"></i></a>
                            @endif
                        @endif
                        @if (isset($website_info["pinterest_account"]))
                            @if (str_starts_with($website_info['pinterest_account'][1], 'http'))
                                <a href="{{$website_info['pinterest_account'][1]}}" target='_blank'><i class="fab fa-pinterest"></i></a>
                            @else
                                <a href="http://{{$website_info['pinterest_account'][1]}}" target='_blank'><i class="fab fa-pinterest"></i></a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <h5 class="text-center contact_time col-md-6 col-10">Contact Time : <span>@if (isset($website_info["office_time"]))
            {{$website_info["office_time"][1]}}
        @endif</span></h5>
        <div class="col-md-10 ask_question row m-auto">
            <div class="col-lg-6">
                <div class="ask_question_text">
                    If you have any suggestions, comments or complaints write in this box.
                </div>
                
            </div>
            <div class="col-lg-6">
                <form id='any_question_form' action="{{ route('any_question') }}" method="POST">
                    @csrf
                    <h5 class="title">Write Us</h5>
                    <div class="form-group">
                        <input type="text" class="form-control input_class" name='name' placeholder="name " id="name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control input_class" name='phone' placeholder="mobile number" id="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input_class" name="email" placeholder="email" id="email" >
                    </div>
                    <div class="form-group">
                        <textarea id="question" name="question" class="form-control input_class" rows='2' placeholder="Suggestions, opinions or complaints" required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info" class="submit_button">Submit</button>
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <div id="any_alert_div" class="d-none">
        <h5>Thank you for writing to us. </h4>
    </div>
</section>
@include('fontend.subscirbe')

@endsection
@push("cjs")
<script>
    $(function(){
        $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $("#email_form").on("submit",function(e){
            e.preventDefault();
            var email=$('input[name="subscribe_email"]').val();
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let form = new FormData($(this)[0]);
            if(re.test(email)){
                $.ajax({
                type:"POST",
                url:"/subscribe-email",
                data:form,
                success:function(data){
                    console.log(data);
                    if(data==1)
                    {
                        $("#email_div").hide();
                        $('input[name="subscribe_email"]').val("");
                        $("#display_alert").text("Thank you for your subscribe");
                        $("#display_alert").show('slow');
                        setTimeout('$("#display_alert").hide("slow")',3000);
                        setTimeout('$("#email_div").show("slow")',3000);
                    }
                }
            });
            }
            else{
                $("#email_div").hide();
                $('input[name="email"]').val("");
                $("#display_alert").text("Please enter a valid email.");
                $("#display_alert").show('slow');
                setTimeout('$("#display_alert").hide("slow")',3000);
                setTimeout('$("#email_div").show("slow")',3000);
            }
        });

    });
</script>
    <script>
        $(function(){
           $("#any_question_form").on("submit",function(e){
               e.preventDefault();
               let form = new FormData($(this)[0]);
               $.ajax({url:'any-question',method:"POST",data:form,success:function(res){
                    if(res=='1')
                    {
                        $('.input_class').val('');
                        $('#any_alert_div').removeClass('d-none');
                        $('#any_alert_div').addClass('d-block');
                        setTimeout(function(){
                            $('#any_alert_div').removeClass('d-block');
                            $('#any_alert_div').addClass('d-none');
                        },4000);
                    }
                }
              })
           })
        });
    </script>
@endpush
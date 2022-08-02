<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="robots" content="index, follow"/>
        <meta name="author" content="cdcconcrete"/>
        <meta name="developer-company" content="cdcconcrete"/>
        <meta name="Developer" content="Md. Jahirul Islam" />
        <meta name="Developer-Email" content="jahirul.iit5th@gmail.com" />
        <meta name="copyright" content="https://www.cdcconcrete.com"/>
        <title>CDC Concrete Ltd. | {{$title}}</title>
        <!-- HTML Meta Tags -->
        <meta name="description" content="{{$page['description']}}">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="keywords" content="{{$website_info['seo_keywords'][1]}}"/>
        <meta name="title" content="{{$website_info['seo_title'][1]}}"/>
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$page['title']}}">
        <meta property="og:description" content="{{$page['description']}}">
        <meta property="og:image" content="{{URL::asset($page['image'])}}">
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="https://www.cdcconcrete.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{$page['title']}}">
        <meta name="twitter:description" content="{{$page['description']}}">
        <meta name="twitter:image" content="{{URL::asset($page['image'])}}">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->
      
        <link rel="icon" href="{{URL::asset('assets/img/icon.png')}}"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/main_update.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">

        <script type='text/javascript' src="{{URL::asset('assets/js/jquery.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $.ajaxSetup({
                cache:false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
            });
            $( document ).ajaxStart(()=>$('.input_error').html(''));
            $( document ).ajaxSuccess((e,res)=>console.log((res.responseJSON && res.responseJSON) || res));
            $( document ).ajaxError(function( event, res ) {
                console.log(res.responseJSON.errors || res);
                let errors = res.responseJSON.errors;
                //console.log(errors);
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        if(element[0]){
                            //console.log(key,element[0]);
                            $(`.${key}_error`).html(element[0]);
                        }
                    }
                }
            });
        </script>
        @stack("css")
    </head>
    <body>
        <section id="main_menu">
            <div class="header_top_div">
                <div class="header_section">
                    <div class="col-lg-6 text-center bangla_text">
                        {{-- <span>Aim to build a durable world</span>,
                        <span class="bangla_text">একটি টেকসই পৃথিবী গড়ার লক্ষ্য</span> --}}
                        {!! $website_info['cdc_moto'][1]!!}
                    </div>
                    <div class="col-lg-6 text-center contact_link" >
                        <a href="mailto:{{$website_info['email_address'][1]}}"><i class="far fa-envelope"></i> Webmail</a>
                        @if(str_starts_with($website_info["mobile_number"][1],'88'))
                        <a href="tel:+{{$website_info["mobile_number"][1]}}"><i class="fa fa-phone"></i> Phone</a>
                        @else
                        <a href="tel:+88{{$website_info["mobile_number"][1]}}"><i class="fa fa-phone"></i> Phone</a>
                        @endif
                        @if(str_starts_with($website_info["whatsapp_number"][1],'88'))
                        <a href="https://wa.me/+{{$website_info["whatsapp_number"][1]}}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                        @else
                        <a href="https://wa.me/+88{{$website_info["whatsapp_number"][1]}}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="header_bottom_div" id='header_bottom_div'>
                <div id='nav_bar_logo' class="nav_bar_logo">
                    <img src="{{URL::asset('assets/img/icon.png')}}" alt="logo">
                </div>
                <div class="container-fluid ">
                    <div class="row nav-style">
                            <nav class="navbar navbar-expand-lg custom-toggler">
                                <button id='navbar_button' class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i id='change_icofont' class="fas fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse navbar_mobile_css" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/rmc-product">RMC Product</a>
                                        </li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>
                                        <li><a class="nav-link"  href="/concrete-block">Concrete Block</a></li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>			
                                        <li><a class="nav-link"  href="/quality-control">Quality Control</a></li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>	
                                        <li><a class="nav-link"  href="/plants-equipments">Plants and Equipments</a></li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>	
                                        <li><a class="nav-link"  href="/gallery">Gallery</a></li>
                                        <li class="nav_line_li">
                                            <hr ,="" size="3" color="black">
                                        </li>	
                                        <li><a class="nav-link"  href="/contact-us">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                    </div>
                </div>
            </div>
        </section>
        {{-- start page content --}}
        @yield("content")
        <section id="header_top">
            <div class="header_top_socail">
                <ul>
                    @if (isset($website_info["fb_page_link"]))
                        @if (str_starts_with($website_info['fb_page_link'][1], 'http'))
                            <li><a href="{{$website_info['fb_page_link'][1]}}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                        @else
                            <li>
                                <a href="https://{{$website_info['fb_page_link'][1]}}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                            </li>
                        @endif
                    @endif
                    @if (isset($website_info["twitter_account"]))
                        @if (str_starts_with($website_info['twitter_account'][1], 'http'))
                            <li>
                                <a href="{{$website_info['twitter_account'][1]}}" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                            </li>
                        @else
                        <li><a href="https://{{$website_info['twitter_account'][1]}}" target="_blank"><i
                            class="fab fa-twitter"></i></a></li>
                        @endif
                    @endif
                    @if (isset($website_info["linkedin_account"]))
                        @if (str_starts_with($website_info["linkedin_account"][1], 'http'))
                        <li><a href="{{$website_info["linkedin_account"][1]}}" target="_blank"><i
                            class="fab fa-linkedin"></i></a></li>
                        @else
                        <li><a href="https://{{$website_info["linkedin_account"][1]}}" target="_blank"><i
                            class="fab fa-linkedin"></i></a></li>
                        @endif
                    @endif
                    @if (isset($website_info["instagram_account"]))
                        @if (str_starts_with($website_info['instagram_account'][1], 'http'))
                        <li><a href="{{$website_info['instagram_account'][1]}}" target="_blank"><i
                            class="fab fa-instagram"></i></a></li>
                        @else
                        <li><a href="https://{{$website_info['instagram_account'][1]}}" target="_blank"><i
                            class="fab fa-instagram"></i></a></li>
                        @endif
                    @endif
                </ul>
            </div>
        </section>

        {{-- scroll --}}
        <a href="#" class="scroll_back">
            <div> 
                <i class="fas fa-chevron-up" aria-hidden="true">
                </i>
                <span>TOP</span>
            </div>
        </a>
        <section id="footer-section">
            <div class="container footer_top">
                <div class="row">
                    <section id="ecommerce-gem-contact-1" class="col-md-5">
                        <div class="contact-list">
                            <h4 class="widget-title">Contact Us</h4>
                            <div class="contact-wrapper">
                                <div class="contact-item">
                                    <div class="contact-inner">
                                            <p class='type_contact'><i  class="fa fa-home"> </i> </p> 
                                            <p>{{$website_info['office_address'][1]}}</p>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                </div>
                                <!-- .contact-item -->

                                <div class="contact-item">
                                    <div class="contact-inner">
                                        <p class='type_contact'><i class="far fa-envelope"></i> </p> <p><a href="mailto:{{$website_info['email_address'][1]}}"> {{$website_info['email_address'][1]}}</a></p>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                </div>
                                <!-- .contact-item -->

                                <div class="contact-item">
                                    <div class="contact-inner">
                                        <p class='type_contact'><i  class="fa fa-phone"></i> </p>
                                        <p>
                                            @if(str_starts_with($website_info["mobile_number"][1],'88'))
                                            <a href="tel:+{{$website_info["mobile_number"][1]}}"> {{$website_info["mobile_number"][1]}}</a>
                                            @else
                                            <a href="tel:+88{{$website_info["mobile_number"][1]}}"> {{$website_info["mobile_number"][1]}}</a>
                                            @endif
                                            ,
                                            @if(str_starts_with($website_info["mobile_number_2"][1],'88'))
                                            <a href="tel:+{{$website_info["mobile_number_2"][1]}}"> {{$website_info["mobile_number_2"][1]}}</a>
                                            @else
                                            <a href="tel:+88{{$website_info["mobile_number_2"][1]}}"> {{$website_info["mobile_number_2"][1]}}</a>
                                            @endif
                                         </p> 
                                    </div>
                                </div>
                                <!-- .contact-item -->

                                <div class="contact-item">
                                    <div class="contact-inner">
                                        <p class='type_contact'><i   class="fa fa-globe"></i> </p>
                                        <p><a href="https://cdcconcrete.com">https://cdcconcrete.com</a></p>
                                        
                                        <!-- .contact-text-wrap -->
                                    </div>
                                </div>
                                <!-- .contact-item -->
                            </div>
                        </div>
                    </section>
                    <section id="ecommerce-gem-contact-1" class="col-md-3">
                        <div class="contact-list">
                            <h4 class="widget-title">Important Link</h4>
                            <div class="contact-wrapper">
                                <div class="contact-item">
                                    <div class="contact-inner">
                                            <p class='type_contact_2'><i class="link_i fas fa-chevron-double-right"> </i> </p> 
                                            <a  href="/concrete-block">Concrete Block</a>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                    <div class="contact-inner">
                                            <p class='type_contact_2'><i class="link_i fas fa-chevron-double-right"> </i> </p> 
                                        <a href="/rmc-product">RMC Product</a>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                    <div class="contact-inner">
                                            <p class='type_contact_2'><i class="link_i fas fa-chevron-double-right"> </i> </p> 
                                            <a  href="/quality-control">Quality Control</a>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                    <div class="contact-inner">
                                            <p class='type_contact_2'><i class="link_i fas fa-chevron-double-right"> </i> </p> 
                                            <a  href="/plants-equipments">Plants and Equipments</a>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                    <div class="contact-inner">
                                            <p class='type_contact_2'><i class="link_i fas fa-chevron-double-right"> </i> </p> 
                                            <a  href="/gallery">Gallery</a>
                                        <!-- .contact-text-wrap -->
                                    </div>
                                </div>
                                <!-- .contact-item -->
                            </div>
                        </div>
                    </section>
                    <section id="ecommerce-gem-contact-1" class="col-md-4">
                        <div class="contact-list">
                            <h4 class="widget-title">Google Map</h4>
                            <div class="map_div">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2170.1307714939176!2d90.34084016086005!3d23.82889599327663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a743c9191%3A0x214c53a45d157437!2sCDC%20Concrete%20Ltd.!5e0!3m2!1sen!2sbd!4v1655529831941!5m2!1sen!2sbd" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- .container -->
        </section>
        <footer id="copyright">
            <div class="container">
                <div class="row ">
                <div class="col-md-8 left_div"> Copyright ©{{ now()->year }} CDC Concrete Ltd. All Right Reversed.</div>
                <div class="col-md-4 right_div"> Powered by <a href="http://techparkit.org" target="_blank" style="color:#00abff">Tech Park IT</a></div>
                </div>
            </div>
        </footer>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101729295552575");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
        {{-- end messenger --}}
        @stack('cjs')
        <script>
            
            $(function () {
                var offset_value=header_bottom_div.offsetTop + 41;
                $("#navbarSupportedContent").css('top',offset_value+'px');
                // back to top
                $(".scroll_back").click(function () {
                    $("html, body").animate(
                        {
                            scrollTop: 0,
                        },
                        1000
                    );
                });
                $(window).on("scroll", function () {
                    var scrolling = $(this).scrollTop();
                    if (scrolling > 500) {
                        $(".scroll_back").addClass("scroll_link");
                        $(".scroll_link").fadeIn(500);
                    } else if (scrolling > 200) {
                        $(".scroll_link").fadeOut(500);
                    }
                });
                $(window).on("load",function(){
                    var pathname=window.location.pathname;
                    $(`a[href="${window.location.pathname}"]`).addClass('active');
                    if(pathname.startsWith('/course'))
                    {
                        $('a[href="/all-course"]').addClass('active');
                    }
                    if(pathname=='/item-blog-page')
                    {
                        $('a[href="/blog"]').addClass('active');
                    }
                });
                $("#navbar_button").on('click',function(){
                    var cal=$("#change_icofont").attr("class");
                    if(cal=='fas fa-bars')
                    {
                        $("#change_icofont").removeClass("fas fa-bars");
                        $("#change_icofont").addClass("fas fa-times");
                    }
                    else{
                        $("#change_icofont").removeClass("fas fa-times");
                        $("#change_icofont").addClass("fas fa-bars");
                    }
                    // <i class="icofont-close-squared-alt"></i>
                });
            });
        </script>
    </body>

</html>

@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC login",
        'image'=>"/assets/img/logo.png",
        ];
@endphp
@extends("fontend.layouts.fontend",['title'=>'login',$page])
@section('content')
    <section id='login_section'>
        <div class="login_section_left">
            <div class="col-lg-4 login_div m-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="pt-2 mb-4 text-center">
                        <h2 class="text-center text-info mt-2 mb-2">লগইন</h2>
                        <img src="/assets/img/user3.jpg" alt="user" >
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="ইমেইল/ইউজার নেইম" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="input-group-text" id="basic-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" placeholder="পাসওয়ার্ড"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="input-group-text" id="basic-addon2" style="cursor: pointer;"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-2 text-center">
                        <button type="submit" class="btn btn-info">
                            {{ __('সাবমিট') }}
                        </button>
                    </div>
                
                    <div class="pb-3 d-flex footer_login justify-content-between align-items-center">
                        <div class="form-check pl-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <small class="form-check-label" for="remember">
                                {{ __('ব্রাউজারে সেইভ রাখুন') }}
                            </small>
                        </div>
                        @if (Route::has('email'))
                            <a class="btn text-info text-decoration-none" href="{{ route('email') }}">
                                {{ __('পাসওয়ার্ড ভুলে গিয়েছেন?') }}
                            </a>
                        @endif
                    </div>
                  </form>
            </div>
        </div>
    </section>
@endsection
@push("cjs")
    <script>
        $(function(){
            $("#basic-addon2").on("click",function(){
                var type=$("#password").attr("type");
                if(type=='password')
                {
                    $("#basic-addon2").html('<i class="fa fa-eye" aria-hidden="true"></i>');
                    $("#password").attr("type",'text');
                }
                else{
                    $("#basic-addon2").html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
                    $("#password").attr("type",'password');
                }
            });
        });
    </script>
@endpush
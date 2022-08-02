@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC register",
        'image'=>"/assets/img/logo.png",
        ];
@endphp
@extends("fontend.layouts.fontend",['title'=>'register',$page])
@section('content')
    <section id='login_section'>
        <div class="container">
            <div class="col-lg-4 col-md-6 login_div">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="pt-1 mb-4 text-center">
                        <h3 class="text-center text-danger mt-2 mb-3">নতুন একাউন্ট খুলুন</h3>
                    </div>
                    <div class="input-group mb-4">
                        <input id="first_name" type="text" placeholder="নামের প্রথম অংশ" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input id="last_name" type="text" placeholder="নামের শেষ অংশ" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input id="phone" type="text" placeholder="মোবাইল নম্বর" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input id="email" type="email" placeholder="ইমেইল" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input id="password" type="password" placeholder="পাসওয়ার্ড" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input id="password-confirm" placeholder="পাসওয়ার্ড কনফার্ম করুন" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="pb-4 text-center">
                        <button type="submit" class="btn btn-danger">সাইন আপ</button>
                    </div>
                    <div class="text-center pb-1 pl-2">
                        <div>
                            <small class="form-check-label" for="exampleCheck1">আপনার কি অ্যাকাউন্ট আছে? <a class='text-danger ml-1' href="/login">লগ ইন করুন</a></small>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </section>
@endsection

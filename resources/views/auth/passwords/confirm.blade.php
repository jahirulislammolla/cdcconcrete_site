@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC confirm",
        'image'=>"/assets/img/logo.png",
        ];
@endphp
@extends("fontend.layouts.fontend",['title'=>'confirm',$page])

@section('content')
<div id="email_reset">
    <div class="email_reset_left mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('কনফার্ম পাসওয়ার্ড') }}</div>
    
                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}
    
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('পাসওয়ার্ড') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('কনফার্ম পাসওয়ার্ড') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('পাসওয়ার্ড ভুলে গিয়েছেন?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

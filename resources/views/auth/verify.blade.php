@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"CDC varify",
        'image'=>"/assets/img/logo.png",
        ];
@endphp
@extends("fontend.layouts.fontend",['title'=>'varify',$page])

@section('content')
<div id="email_reset">
    <div class="email_reset_left mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('ভেরিফাই ইমেল এড্রেস') }}</div>
    
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('ফ্রেস ভেরিফিকেশন লিংক সেন্ড ইয়োর ইমেল এড্রেস') }}
                            </div>
                        @endif
    
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('ক্লিক রিসেন্ট') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

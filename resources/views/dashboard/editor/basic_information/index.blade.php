
@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Basic Information
                        <small>CDC Concrete editor panel</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    {{-- <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Sample Page</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            @php
                                // dd($website_info);
                                // dd($website_info);
                            @endphp
                            <form id="" action="{{ route('editor_basic_information_update') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row pb-3">
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="fb_page_link">Facebook Account Link: </label>
                                        <input type="text" value="{{$website_info['fb_page_link'][1]}}" class="form-control" id="fb_page_link" aria-describedby="emailHelp" name="fb_page_link">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="fb_messanger_link">Facebook Messanger Link: </label>
                                        <input type="text" value="{{$website_info['fb_messanger_link'][1]}}" class="form-control" id="fb_messanger_link" aria-describedby="emailHelp" name="fb_messanger_link">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="twitter_account">Twitter Account Link:</label>
                                        <input type="text" value="{{$website_info['twitter_account'][1]}}" class="form-control" id="twitter_account" aria-describedby="emailHelp" name="twitter_account">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="instagram_account">Instagram Account Link:</label>
                                        <input type="text" value="{{$website_info['instagram_account'][1]}}" class="form-control" id="instagram_account" aria-describedby="emailHelp" name="instagram_account">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="youtube_account">Youtube Account Link:</label>
                                        <input type="text" value="{{$website_info['youtube_account'][1]}}" class="form-control" id="youtube_account" aria-describedby="emailHelp" name="youtube_account">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="email_address">Email Address:</label>
                                        <input type="email" value="{{$website_info['email_address'][1]}}" class="form-control" id="email_address" aria-describedby="emailHelp" name="email_address">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="phone_number">Phone Number:</label>
                                        <input type="text" value="{{$website_info['phone_number'][1]}}" class="form-control" id="phone_number" aria-describedby="emailHelp" name="phone_number">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="mobile_number">Mobile Number 1:</label>
                                        <input type="text" value="{{$website_info['mobile_number'][1]}}" class="form-control" id="mobile_number" aria-describedby="emailHelp" name="mobile_number">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="mobile_number_2">Mobile Number 2:</label>
                                        <input type="text" value="{{$website_info['mobile_number_2'][1]}}" class="form-control" id="mobile_number_2" aria-describedby="emailHelp" name="mobile_number_2">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="whatsapp_number">WhatsApp Number:</label>
                                        <input type="text" value="{{$website_info['whatsapp_number'][1]}}" class="form-control" id="whatsapp_number" aria-describedby="emailHelp" name="whatsapp_number">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="seo_title">Seo Title:</label>
                                        <input type="text" value="{{$website_info['seo_title'][1]}}" class="form-control" id="seo_title" aria-describedby="emailHelp" name="seo_title">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="seo_keywords">Seo Keywords:</label>
                                        <input type="text" value="{{$website_info['seo_keywords'][1]}}" class="form-control" id="seo_keywords" aria-describedby="emailHelp" name="seo_keywords">
                                    </div>

                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="seo_description">SEO Description:</label>
                                        <textarea type="text" value="" class="form-control" id="seo_description" aria-describedby="emailHelp" name="seo_description">{!! $website_info['seo_description'][1] !!}</textarea>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="office_address">Office Address:</label>
                                        <textarea type="text" value="" class="form-control" id="office_address" aria-describedby="emailHelp" name="office_address">{!! $website_info['office_address'][1] !!}</textarea>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="office_time">Office Time:</label>
                                        <input type="text" value="{{$website_info['office_time'][1]}}" class="form-control" id="office_time" aria-describedby="emailHelp" name="office_time">
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="cdc_moto">CDC Concrete Moto:</label>
                                        <input type="text" value="{{$website_info['cdc_moto'][1]}}" class="form-control" id="cdc_moto" aria-describedby="emailHelp" name="cdc_moto" />
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="linkedin_account">LinkedIn Account:</label>
                                        <input type="text" value="{{$website_info['linkedin_account'][1]}}" class="form-control" id="linkedin_account" aria-describedby="emailHelp" name="linkedin_account" />
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="pinterest_account">Pinterest Account:</label>
                                        <input type="text" value="{{$website_info['pinterest_account'][1]}}" class="form-control" id="pinterest_account" aria-describedby="emailHelp" name="pinterest_account" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group mb-3">
                                        <button type='submit' class="btn btn-success">Submit</button>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Container-fluid starts -->
@endsection
@push('ccss')
<!-- Summernote CSS - CDN Link -->  
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- //Summernote CSS - CDN Link -->
<link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/custom_2.css">
@endpush

@push('cjs')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(function(){
        $('#value').summernote({
            height: 200,
            tabsize: 2
        });
    })
</script>
<script src="{{ asset('contents/admin') }}/assets/js/blog_vue.js"></script>
@endpush


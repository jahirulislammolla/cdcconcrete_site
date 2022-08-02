
@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Page Information
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
                            <form id="" action="{{ route('editor_page_information_update') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row pb-3">
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="about_us"class="pb-2"><b>About Us Info:</b> </label>
                                        <textarea value="" class="form-control" id="about_us" aria-describedby="emailHelp" name="about_us">{!!$website_info['about_us'][1]!!}</textarea>
                                    </div>
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="vision"class="pb-2"><b>Vision:</b></label>
                                        <textarea  value="" class="form-control" id="vision" aria-describedby="emailHelp" name="vision">{!!$website_info['vision'][1]!!}</textarea>
                                    </div>
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="mission"class="pb-2"><b>Mission:</b></label>
                                        <textarea  value="" class="form-control" id="mission" aria-describedby="emailHelp" name="mission">{!!$website_info['mission'][1]!!}</textarea>
                                    </div>
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="quality_control" class="pb-2"><b>Quality Control:</b></label>
                                        <textarea  value="" class="form-control" id="quality_control" aria-describedby="emailHelp" name="quality_control">{!!$website_info['quality_control'][1]!!}</textarea>
                                    </div>
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="lab_facility" class="pb-2"><b>Lab Facility:</b></label>
                                        <textarea  value="" class="form-control" id="lab_facility" aria-describedby="emailHelp" name="lab_facility">{!!$website_info['lab_facility'][1]!!}</textarea>
                                    </div>
                                    <div class="form-group col-lx-6 pb-3">
                                        <label for="buet_test" class="pb-2"><b>Buet Test:</b></label>
                                        <textarea  value="" class="form-control" id="buet_test" aria-describedby="emailHelp" name="buet_test">{!!$website_info['buet_test'][1]!!}</textarea>
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
        $('#about_us').summernote({
            height: 200,
            tabsize: 2
        });
        $('#vision').summernote({
            height: 200,
            tabsize: 2
        });
        $('#mission').summernote({
            height: 200,
            tabsize: 2
        });
        $('#quality_control').summernote({
            height: 200,
            tabsize: 2
        });
        $('#lab_facility').summernote({
            height: 200,
            tabsize: 2
        });
        $('#buet_test').summernote({
            height: 200,
            tabsize: 2
        });
    })
</script>
<script src="{{ asset('contents/admin') }}/assets/js/blog_vue.js"></script>
@endpush
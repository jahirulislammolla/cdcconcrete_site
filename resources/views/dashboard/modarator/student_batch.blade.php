
@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Batches
                        {{-- <small>Universal Admin panel</small> --}}
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
            @foreach ($batches as $item)
                <div class="col-xl-3 col-md-4">
                    <div class="card height-equal equal-height-lg">
                        <div class="blog-box blog-grid text-center">
                            <img src="{{ asset($item->thumbnail) }}" class="img-fluid top-radius-blog" alt="">
                            <div class="blog-details-main">
                                {{-- <ul class="blog-social">
                                    <li class="digits">9 April 2021</li>
                                    <li class="digits">by: Admin</li>
                                    <li class="digits">0 Hits</li>
                                </ul> --}}
                                <hr>
                                <h6 class="blog-bottom-details">{{ $item->title }}</h6>
                                <div class="d-flex justify-content-evenly pb-3 flex-wrap">
                                    <a href="{{ route('dashboard_batch_course_content',$item->id) }}" class="btn my-2 btn-sm btn-primary">
                                        Course Details
                                    </a>
                                    <a href="{{ route('modarator_course_batch_students',$item->id) }}" class="btn my-2 btn-sm btn-secondary">
                                        Course Students
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Container-fluid starts -->
@endsection

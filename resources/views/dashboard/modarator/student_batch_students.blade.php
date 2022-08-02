
@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Batch Students
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
            @foreach ($batch_students as $item)
                <div class="col-xl-3 col-md-4">
                    <div class="card height-equal equal-height-lg">
                        <div class="card-header py-2 d-flex flex-wrap px-2">
                            <img src="{{ asset($item->course_batch_student_info->photo) }}" class="w-25 me-3 img-thumbnail circle top-radius-blog" alt="">
                            <ul style="font-size: 10px;">
                                <li>
                                    name:
                                    {{ $item->course_batch_student_info->first_name }}
                                    {{ $item->course_batch_student_info->last_name }}
                                </li>
                                <li>user id: {{ $item->course_batch_student_info->id }}</li>
                            </ul>
                        </div>
                        <div class="blog-box blog-grid text-center">
                            <div class="blog-details-main">
                                <a href="{{ route('modarator_course_batch_student_analytics',['batch_id'=>$item->course_batch_id,'user_id'=>$item->course_batch_student_info->id]) }}" class="btn my-2 btn-sm btn-secondary">
                                    analytics
                                </a>
                                {{-- <ul class="blog-social">
                                    <li class="digits">9 April 2021</li>
                                    <li class="digits">by: Admin</li>
                                    <li class="digits">0 Hits</li>
                                </ul>
                                <hr>
                                <h6 class="blog-bottom-details">

                                </h6>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Container-fluid starts -->
@endsection

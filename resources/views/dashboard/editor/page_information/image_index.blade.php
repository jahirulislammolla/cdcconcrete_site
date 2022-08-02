
@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Image Information
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
                    <div class="card-body" id='body_div'>
                        <div class="table-responsive">
                            @php
                                // dd($website_info);
                                // dd($website_info);
                            @endphp

                                <div class="row pb-3">
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="home_image"class="pb-2"><b>{{$website_info['home_image'][0]}}:</b> </label> <div class="pb-2">
                                            <img src="/{{$website_info['home_image'][1]}}" title="{{$website_info['home_image'][0]}}" alt="home_image" style='width:300px;'>
                                        </div>
                                        <button title="{{$website_info['home_image'][0]}}" id='home_image' class="btn btn-warning"  data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate">Update</button>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="quality_control_image"class="pb-2"><b>{{$website_info['quality_control_image'][0]}}:</b> </label> 
                                        <div class="pb-2">
                                            <img src="/{{$website_info['quality_control_image'][1]}}" title="{{$website_info['quality_control_image'][0]}}" alt="quality_control_image" style='width:300px;'>
                                        </div>
                                        <button title="{{$website_info['quality_control_image'][0]}}" id='quality_control_image' class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate">Update</button>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="company_image"class="pb-2"><b>{{$website_info['company_image'][0]}}:</b> </label> <div class="pb-2">
                                            <img src="/{{$website_info['company_image'][1]}}" title="{{$website_info['company_image'][0]}}" alt="company_image" style='width:300px;'>
                                        </div>
                                        <button title="{{$website_info['company_image'][0]}}" id='company_image' class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate">Update</button>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="concrete_block_image"class="pb-2"><b>{{$website_info['concrete_block_image'][0]}}:</b> </label> 
                                        <div class="pb-2">
                                            <img src="/{{$website_info['concrete_block_image'][1]}}" title="{{$website_info['concrete_block_image'][0]}}" alt="concrete_block_image" style='width:300px;'>
                                        </div>
                                        <button title="{{$website_info['concrete_block_image'][0]}}" id='concrete_block_image' class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate">Update</button>
                                    </div>
                                    <div class="form-group col-lg-6 pb-3">
                                        <label for="rmc_product_image"class="pb-2"><b>{{$website_info['rmc_product_image'][0]}}:</b> </label>
                                        <div class="pb-2">
                                            <img src="/{{$website_info['rmc_product_image'][1]}}" title="{{$website_info['rmc_product_image'][0]}}" alt="rmc_product_image" style='width:300px;'>
                                        </div>
                                        <button title="{{$website_info['rmc_product_image'][0]}}" id='rmc_product_image' class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate">Update</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalUpdateLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalUpdateLabel">Update <span id="name_image"></span> Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_update_form" action="{{ route('editor_page_image_update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="image">Image <span id='size_pixel'></span>:</label>
                                <input type="file"  id="update_image" name="" placeholder="image" class="form-control input_val" required/>
                            </div>
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="form-group mb-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="form-group mb-3">
                                <button type='submit' class="btn btn-success">Submit</button>
                            </div>
                        
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push("pjs")

    <script>
       $(function(){
           $('button').on("click",function(){
            var id= $(this).attr('id');
            var title=$(this).attr('title');
            console.log(id,title);
            $("#update_image").attr('name',id);
            $("#name_image").text(title);
            if(id=='company_image'){
                $("#size_pixel").text('1024x768px');
            }
            if(id=='concrete_block_image' || id=='rmc_product_image'){
                $("#size_pixel").text('600x425px');
            }
            if(id=='home_image' || id=='quality_control_image'){
                $("#size_pixel").text('1920x720px');
            }
           });
       }); 
    </script>
@endpush

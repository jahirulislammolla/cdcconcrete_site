

@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Product Information
                        <small>CDC Editor panel</small>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container" id='tableBody'>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap">
                        <h4>All</h4>
                        <a href="#" class="btn btn-info btn-sm m-1 create_btn" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalCreate"><i class="fa fa-plus"></i> Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Feature</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($all as $key => $item)
                                        
                                        <tr class="text-center">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->name }} </td>
                                            <td><img src="/{{ $item->image }}" alt="{{ $item->name }}" srcset="" width="100px" /></td>
                                            <td>
                                                {{ $item->feature_1 }},{{ $item->feature_2 }},{{ $item->feature_3 }},{{ $item->feature_4 }},{{$item->feature_5}}
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm m-1 update_btn" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate" data-update="{{$item}}"><i class="fa fa-pencil"></i> Update</a>
                                                <a onclick="return confirm('Are you sure?')" href="{{ route('editor_product_information_delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>   
                        <div class="d-flex justify-content-center">
                            {{ $all->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Container-fluid starts -->
    <div class="modal fade" id="exampleModalCreate" tabindex="-1" aria-labelledby="exampleModalCreateLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCreateLabel">Add Product Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_create_form" action="{{ route('editor_product_information_create') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text"  id="name" name="name" placeholder="product name" class="form-control input_val"  required/>
                            </div>
 
                            <div class="form-group mb-3">
                                <label for="image">Image(500x400px):</label>
                                <input type="file"  id="image" name="image" class="form-control input_val" required/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_1">Feature 1 :</label>
                                <input type="text"  id="feature_1" value='Different Color' name="feature_1" placeholder="feature_1" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_2">Feature 2 :</label>
                                <input type="text"  id="feature_2" value='Long Life' name="feature_2" placeholder="feature_2" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_3">Feature 3 :</label>
                                <input type="text"  id="feature_3" value='Reasonal Prices' name="feature_3" placeholder="feature_3" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_4">Feature 4 :</label>
                                <input type="text"  id="feature_4" value='High Strength' name="feature_4" placeholder="feature_4" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_5">Feature 5 :</label>
                                <input type="text"  id="feature_5" value='High Strength' name="feature_5" placeholder="feature_5" class="form-control input_val" />
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
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalUpdateLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalUpdateLabel">Update product Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_update_form" action="{{ route('editor_product_information_update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text"  id="update_name" name="name" class="form-control input_val" required/>
                            </div>
 
                            <div class="form-group mb-3">
                                <label for="image">Image(500x400px):</label>
                                <input type="file"  id="image" name="image" class="form-control input_val"/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_1">Feature 1 :</label>
                                <input type="text"  id="update_feature_1" name="feature_1" placeholder="feature_1" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_2">Feature 2 :</label>
                                <input type="text"  id="update_feature_2" name="feature_2" placeholder="feature_2" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_3">Feature 3 :</label>
                                <input type="text"  id="update_feature_3" name="feature_3" placeholder="feature_3" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_4">Feature 4 :</label>
                                <input type="text"  id="update_feature_4" name="feature_4" placeholder="feature_4" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="feature_5">Feature 5 :</label>
                                <input type="text"  id="update_feature_5" name="feature_5" placeholder="feature_5" class="form-control input_val" />
                            </div>
                            <div class="form-group d-none">
                                <input type="text" id="update_id" name="id"/>
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
           $('.update_btn').on("click",function(){
            var data=$(this).data('update');
            update_name.value=data.name;
            update_feature_1.value=data.feature_1;
            update_feature_2.value=data.feature_2;
            update_feature_3.value=data.feature_3;
            update_feature_4.value=data.feature_4;
            update_id.value=data.id;
           });
       }); 
    </script>
@endpush

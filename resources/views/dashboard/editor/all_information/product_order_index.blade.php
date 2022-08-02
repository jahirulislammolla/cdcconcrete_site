

@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Order Contact Information
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
                                        <th>Degination</th>
                                        <th>Mobile</th>
                                        <th>WhatsApp</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($all as $key => $item)
                                        
                                        <tr class="text-center">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->name }} </td>
                                            <td>{{ $item->degination }} </td>
                                            <td>{{ $item->number_1 }} , {{ $item->number_2 }},{{ $item->number_3 }},{{ $item->number_4 }} </td>
                                            <td>{{ $item->whatsapp }} </td>
                                            <td>{{ $item->email }} </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm m-1 update_btn" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate" data-update="{{$item}}"><i class="fa fa-pencil"></i> Update</a>
                                                <a onclick="return confirm('Are you sure?')" href="{{ route('editor_product_order_information_delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i> Delete</a>
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
                    <h5 class="modal-title" id="exampleModalCreateLabel">Add Order Contact Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_create_form" action="{{ route('editor_product_order_information_create') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text"  id="name" name="name" placeholder="name" class="form-control input_val"  required/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="degination">Degination:</label>
                                <input type="text"  id="degination" name="degination" placeholder=" degination" class="form-control input_val"  />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_1">Number 1:</label>
                                <input type="text"  id="number_1" name="number_1" placeholder="number_1" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_2">Number 2:</label>
                                <input type="text"  id="number_2" name="number_2" placeholder="number_2" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_3">Number 3:</label>
                                <input type="text"  id="number_3" name="number_3" placeholder="number_3" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_4">Number 4:</label>
                                <input type="text"  id="number_4" name="number_4" placeholder="number_4" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="whatsapp">WhatsApp:</label>
                                <input type="text"  id="whatsapp" name="whatsapp" placeholder="whatsapp" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email"  id="email" name="email" placeholder="email" class="form-control input_val" required/>
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
                    <h5 class="modal-title" id="exampleModalUpdateLabel">Update Order Contact Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_update_form" action="{{ route('editor_product_order_information_update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text"  id="update_name" name="name" placeholder=" name" class="form-control input_val"  required/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="degination">Degination:</label>
                                <input type="text"  id="update_degination" name="degination" placeholder="degination" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_1">Number 1:</label>
                                <input type="text"  id="update_number_1" name="number_1" placeholder="number_1" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_2">Number 2:</label>
                                <input type="text"  id="update_number_2" name="number_2" placeholder="number_2" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_3">Number 3:</label>
                                <input type="text"  id="update_number_3" name="number_3" placeholder="number_3" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="number_4">Number 4:</label>
                                <input type="text"  id="update_number_4" name="number_4" placeholder="number_4" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="whatsapp">WhatsApp:</label>
                                <input type="text"  id="update_whatsapp" name="whatsapp" placeholder="whatsapp" class="form-control input_val" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email"  id="update_email" name="email" placeholder="email" class="form-control input_val" required/>
                            </div>
                            <div class="form-group mb-3 d-none">
                                <input type="text"  id="update_id" name="id" placeholder="id" class="form-control input_val" required/>
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
            update_degination.value=data.degination;
            update_number_1.value=data.number_1;
            update_number_2.value=data.number_2;
            update_number_3.value=data.number_3;
            update_number_4.value=data.number_4;
            update_whatsapp.value=data.whatsapp;
            update_email.value=data.email;
            update_id.value=data.id;
           });
       }); 
    </script>
@endpush

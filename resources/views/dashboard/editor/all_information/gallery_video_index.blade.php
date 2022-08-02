

@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Gallery Video Information
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
                                        <th>Title</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($all as $key => $item)
                                        
                                        <tr class="text-center">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->title }} </td>
                                            <td>
                                            @isset($item->link)
                                                @if(str_starts_with($item->link,'https://www.youtube.com/watch?v='))
                                                    @php
                                                        $video_id = explode('https://www.youtube.com/watch?v=',$item->link);
                                                    @endphp
                                                    <iframe width="200" height="125" src="https://www.youtube.com/embed/{{$video_id[1]}}" title="{{$item->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                @elseif (str_starts_with($item->link,'https://youtu.be/'))
                                                    @php
                                                        $video_id = explode('https://youtu.be/',$item->link);
                                                    @endphp
                                                    <iframe width="200" height="125" src="https://www.youtube.com/embed/{{$video_id[1]}}" title="{{$item->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                @endif
                                            @endisset
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm m-1 update_btn" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalUpdate" data-update="{{$item}}"><i class="fa fa-pencil"></i> Update</a>
                                                <a onclick="return confirm('Are you sure?')" href="{{ route('editor_gallery_video_information_delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i> Delete</a>
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
                    <h5 class="modal-title" id="exampleModalCreateLabel">Add Gallery Video Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_create_form" action="{{ route('editor_gallery_video_information_create') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="title"> Title:</label>
                                <input type="text"  id="title" name="title" placeholder="gallery video title" class="form-control input_val" required/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="link">Link :</label>
                                <input type="text"  id="link" name="link" placeholder="link" class="form-control input_val" />
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
                    <h5 class="modal-title" id="exampleModalUpdateLabel">Update gallery_video Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body -->
                    <form id="contact_update_form" action="{{ route('editor_gallery_video_information_update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="title"> Title:</label>
                                <input type="text"  id="update_title" name="title" class="form-control input_val" required/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="link">Link:</label>
                                <input type="text"  id="update_link" name="link" class="form-control input_val"/>
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
            update_title.value=data.title;
            update_link.value=data.link;
            update_id.value=data.id;
           });
       }); 
    </script>
@endpush

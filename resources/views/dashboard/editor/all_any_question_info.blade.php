

@extends('dashboard.layouts.admin')
@section('contents')

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>
                        Any Question Information
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

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Question</th>
                                        <th>Reply Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($all as $key => $item)
                                        
                                        <tr class="text-center">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->name }} </td>
                                            <td>{{ $item->phone }} </td>
                                            <td>{{ $item->email }} </td>
                                            <td>{{ $item->question }} </td>
                                            <td><button class="btn btn-warning btn-sm m-1 text-white" @click='onClick' id='{{$item->id}}'>{{$item->reply_status}}</button> </td>
                                            <td>
                                                <a onclick="return confirm('Are you sure?')" href="{{ route('editor_any_question_delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i> Delete</a>
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
    <section class="update_reply">

    </section>
@endsection
@push('ccss')
    <style>
        .update_reply{
            position: fixed;
            right: 10px;
            top: 100px;
        }
    </style>
@endpush
@push("pjs")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="/js/vue_script.js"></script>
    <script>
        const app = new Vue({
        el:"#tableBody",
        data: function() {
            return {
            count: 0
            }
        },
        methods:{
            onClick:function(event){
                var id=event.target.id;
                var status_text='';
                if(event.target.innerText == 'NO')
                {
                    status_text='YES';
                }
                else{
                    status_text='NO';
                }
                $.ajax({
                    type:'get',
                    url:"{{route('editor_any_question_update')}}",
                    data:{
                        id:id,
                        reply_status:status_text
                    },
                    success:function(data){
                        console.log(data);
                    $(".update_reply").append(
                        `<div class="p-3 bg-warning wow shake" style="border-radius: 10px;">
                                <div class="text-white" id='meg'>Question Reply ${status_text}</div>
                            </div>`
                        );
                    $("#"+id).html(status_text);
                    setTimeout(() => {
                            $(".update_reply").text('');
                    }, 3000);

                    }
                });
            }
        }
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        new WOW().init();
        wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
        }
        )
        wow.init();
    </script>
@endpush

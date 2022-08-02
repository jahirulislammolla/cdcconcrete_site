@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <td>email</td>
            <td>action</td>
        </tr>
        @foreach ($user as $item)
            <tr>
                <td>{{ $item->email }}</td>
                <td><button class="edit_btn" data-user="{{ $item }}">edit</button></td>
            </tr>
        @endforeach
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="edit_form">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


    @push('cjs')
        <script>

            $(function(){

                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                        keyboard: false
                })
                $('.edit_btn').on('click',function(){
                    let data = $(this).data('user');
                    console.log(data);
                    $.get('/test_d/'+data.id,(res)=>{
                        console.log(res);
                        edit_form.innerHTML = res;
                        myModal.show();
                    })
                })
            })
        </script>
    @endpush
@endsection

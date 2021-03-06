@extends('admin.main')
@section('content')
    <div class="container">
        @if(session('msg'))
            <div @class('alert alert-success')>
                {{session('msg')}}
            </div>
        @endif

        @if(session('error'))
            <div @class('alert alert-danger')>
                {{session('error')}}
            </div>
        @endif

        <table class="table datatable">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lsTable as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>Table {{$table->type}}</td>
                   <td>{{$table->quantity}}</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm"
                           onclick="removeRow({{ $table->id }}, '/admin/table/{{ $table->id }}')"
                        >
                            <i class="bx bxs-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function removeRow(id,url){
            if(confirm('Deleted Without Recovering Are You Sure?')){
                $.ajax({
                    type:'DELETE',
                    datatype: 'JSON',
                    data: { id },
                    url : url,
                    success: function (result){
                        if(result.error === false){
                            alert(result.message);
                            location.reload();
                        }else {
                            alert('Delete Error Please Try Again');
                        }
                    }
                })
            }
        }
    </script>
@endsection

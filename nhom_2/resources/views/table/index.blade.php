@extends('admin.main')
@section('content')
    <div class="container">
        <form action="{{route('table.index')}}" method="GET" class="row g-3">
            @csrf
            <div class="col-md-12">
                <label for="title" class="form-label">Type</label>
                <input type="number" class="form-control" name="seach_type" id="title">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <hr/>

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

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lsTable as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>Table {{$table->type}}</td>
                    <td>@if($table->status == 0)
                            Booked a table
                        @endif
                        @if($table->status == 1)
                            Using
                        @endif
                        @if($table->status == 2)
                            End or Cancel
                        @endif
                    </td>
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

        {{$lsTable->links("pagination::bootstrap-4")}}
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

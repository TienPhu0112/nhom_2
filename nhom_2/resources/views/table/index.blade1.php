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

        <form action="{{route('table.index')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="title">Type:</label>
                <input class="form-control" type="text" name="seach_type"/>
            </div>
            <input type="submit" value="Seach">
        </form>
        <hr/>
        <a href="{{asset('table/create')}}" class="btn btn-primary">Add new</a>
        <hr>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Status</th>

            </tr>
            @foreach($lsTable as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>{{$table->type}}</td>
                    <td>
                        @if($table->status == 0)
                            OPEN
                        @endif
                        @if($table->status == 1)
                            <span style =" color: red; font-width: bold;"> CONFIRM</span>
                        @endif
                        @if($table->status == 2)
                            <span style =" color: blue; font-width: bold;">DONE</span>
                        @endif
                        @if($table->status == 3)
                            <span style =" color: red; font-width: bold;">CANCEL</span>
                        @endif
                    </td>
                    <td>
                            <form onsubmit="return" method="POST" action="{{route('table.destroy', $table->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete"/>
                            </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$lsTable->links("pagination::bootstrap-4")}}
    </div>




@endsection

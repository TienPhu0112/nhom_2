@extends('admin.main')
@section('content')
    <div @class('container')>
        <p>Add new</p>

        @if(count($errors) > 0)
            <div @class('alert alert-danger')>
                @foreach($errors->all() as $err)
                    <p>{{$err}}</p>
                @endforeach
            </div>
        @endif
        <form  action="{{route('table.store')}}"method="post"
               enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">type</label>
                <input type="text" class="form-control"
                       id="type" name="type">
            </div>

            <div class="form-group">
                <label for="title">status</label>
                <select name="status" class="form-group">
                    @foreach($lsTable as $table)
                        <option value="{{$table->status==0}}">OPEN</option>
                        <option value="{{$table->status==1}}">CONFIRM</option>
                        <option value="{{$table->status==2}}">DONE</option>
                        <option value="{{$table->status==3}}">CANCEL</option>

                    @endforeach
                </select>
            </div>
            <input type="submit" value="Save">
        </form>
    </div>

@endsection

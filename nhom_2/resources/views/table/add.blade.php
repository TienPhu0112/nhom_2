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
            <div class="row mb-3">
                <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Trạng Thái</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" value="0" type="radio" name="status" id="gridRadios1" checked="">
                        <label class="form-check-label" for="gridRadios1">
                            Đang chờ
                        </label>
                    </div>


                </div>
            </fieldset>
            <input type="submit" value="Save">
        </form>
    </div>

@endsection

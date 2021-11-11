@extends('admin.main')
@section('content')
    <div @class('container')>

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
                    <input type="number" class="form-control" id="type" name="type">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="quantity">
                        <option value="1">1 Seats</option>
                        <option value="2">2 Seats</option>
                        <option value="4">4 Seats</option>
                        <option value="6">6 Seats</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Add New</button>
            </div>
        </form>
    </div>

@endsection

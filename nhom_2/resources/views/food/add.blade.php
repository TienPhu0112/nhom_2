
@extends('admin.main')

@section('content')
    @if(count($errors) > 0)
        <div @class('alert alert-danger')>
            @foreach($errors->all() as $err)
                <p>{{$err}}</p>
            @endforeach
        </div>
    @endif

    <!-- General Form Elements -->
    <form  method="post" action="{{route('food.store')}}"
           enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Dish Type</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="dishtype_id">
                    @foreach($lsType as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="image" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="price">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Sale price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="sale_price">
            </div>
        </div>

        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="status" id="gridRadios1" checked="">
                    <label class="form-check-label" for="gridRadios1">
                        Đang phục vụ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="status" id="gridRadios2">
                    <label class="form-check-label" for="gridRadios2">
                        Dừng phục vụ
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form><!-- End General Form Elements -->
@endsection

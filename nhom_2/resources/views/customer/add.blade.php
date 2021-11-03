@extends('admin.main')
@section('content')
    <div @class('container')>

        <form method="post" @class('form') action="{{route('customer.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>

            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>

        </form>
    </div>
@endsection

@extends('admin.main')
@section('content')
    <div @class('container')>
        <p>Add new</p>

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
                <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age" name="age">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
            </div>

        </form>
    </div>
@endsection

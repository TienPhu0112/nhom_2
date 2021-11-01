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

        <form method="post" @class('form') action="{{route('customer.update' , $customer->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{$customer->email}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="phone" name="phone" value="{{$customer->phone}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputAge" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="address" name="address" value="{{$customer->address}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection

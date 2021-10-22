@extends('admin.main')
@section('content')
    <div @class('container')>
        <p>Edit</p>

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
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
            </div>

            <div class="form-group">
                <label for="title">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$customer->email}}">
            </div>

            <div class="form-group">
                <label for="title">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$customer->phone}}">
            </div>

            <div class="form-group">
                <label for="title">Age</label>
                <input type="text" class="form-control" id="age" name="age" value="{{$customer->age}}">
            </div>

            <input type="submit" value="Save">
        </form>
    </div>
@endsection

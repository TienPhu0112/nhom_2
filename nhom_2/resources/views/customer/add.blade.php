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

        <form method="post" @class('form') action="{{route('customer.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="title">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="title">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="title">Age</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>

            <input type="submit" value="Save">
        </form>
    </div>
@endsection

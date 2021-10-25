@extends('admin.main')
@section('content')
    <div class="container">

        @if(session('msg'))
            <div @class('alert alert-success')>
                {{session('msg')}}
            </div>
        @endif

        <form action="{{route('customer.index')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="title">Name:</label>
                <input class="form-control" type="text" name="search_name"/>
            </div>
            <input type="submit" value="Search">
        </form>

        <hr/>
        <a href="{{asset('customer/create')}}" class="btn btn-primary">Add new</a>
        <hr>
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
            </tr>
            @foreach($lsCustomer as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->age}}</td>
                    <td>
                        <a href="{{route("customer.edit", $customer->id)}}">Edit</a>
                        <form onsubmit="return" method="POST" action="{{route('customer.destroy', $customer->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{$lsCustomer->links("pagination::bootstrap-4")}}
    </div>
@endsection

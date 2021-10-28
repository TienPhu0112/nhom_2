@extends('admin.main')

@section('content')

    @if(session('msg'))
        <div @class('alert alert-success')>
            {{session('msg')}}
        </div>
    @endif

    @if(session('error'))
        <div @class('alert alert-danger')>
            {{session('error')}}
        </div>
    @endif

    <!-- Table with stripped rows -->
    <table class="table datatable">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Sale Price</th>
            <th scope="col">Status</th>
            <th scope="col">Dish Type</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsFood as $food)
            <tr>
                <th>{{$food->id}}</th>
                <td>{{$food->name}}</td>
                <td><img src="{{asset($food->image)}}" style="width:110px"></td>
                <td>{{$food->price}}</td>
                <td>{{$food->sale_price}}</td>
                <td>{{$food->status === 0 ? "Đang phục vụ" : "Dừng phục vụ"}}</td>
                <td>{{ $food->dishTypes->name }}</td>
                <td>
                    <a href="{{route("food.edit", $food->id)}}" class="btn btn-primary rounded-pill">
                        <i class="bx bxs-edit"></i>
                    </a>
                </td>
                <td>
                    <form onsubmit="return confirm('Delete food {{$food->name}}?')" method="POST" action="{{route('food.destroy',$food->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger rounded-pill" type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

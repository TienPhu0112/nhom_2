
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
    <form method="post" action="{{route('type.store')}}">
        @csrf
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>

        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form><!-- End General Form Elements -->
@endsection

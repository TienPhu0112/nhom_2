
@extends('admin.main')

@section('content')
    <form @class('form') method="POST" action="{{route('type.update', $type->id)}}">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{$type->name}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>
@endsection

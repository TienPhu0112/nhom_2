@extends('admin.main')

@section('content')
    <form class="row g-3" action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label class="form-label">Topic</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="topic">
                    <option value="1">Interior</option>
                    <option value="2">Food</option>
                    <option value="3">Events</option>
                    <option value="4">VIP Guests</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label for="upload" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="upload">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>

@endsection

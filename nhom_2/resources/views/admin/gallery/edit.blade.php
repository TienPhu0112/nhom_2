@extends('admin.main')

@section('content')
    <form class="row g-3" action="{{route('gallery.update',$gallery->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label class="form-label">Topic</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="topic">
                    <option value="1" {{ $gallery->topic==1  ? 'selected=""' : ''}}>Interior</option>
                    <option value="2" {{ $gallery->topic==2  ? 'selected=""' : ''}}>Food</option>
                    <option value="3" {{ $gallery->topic==3  ? 'selected=""' : ''}}>Events</option>
                    <option value="4" {{ $gallery->topic==4  ? 'selected=""' : ''}}>VIP Guests</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <br>
            <img src="{{asset($gallery->image)}}" style="width:250px; margin-bottom: 5px;">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
@endsection



@extends('admin.main')

@section('content')
    <form @class('form') method="post" action="{{route('food.update', $food->id)}}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Dish Type</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="dishtype_id">
                    @foreach($lsType as $type)
                        <option value="{{$type->id}}"
                            {{$type->id == $food->dishtype_id ? 'selected' : ''}}> {{$type->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$food->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <img src="{{asset($food->image)}}" style="width:250px; margin-bottom: 5px;">
                <input class="form-control" type="file" id="formFile" name="image" value="{{$food->image}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="price" name="price" value="{{$food->price}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Sale price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="sale_price" name="sale_price" value="{{$food->sale_price}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description">{{$food->description}}</textarea>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="status" id="gridRadios1" {{ $food->status === 0 ? 'checked=""' : "" }} >
                    <label class="form-check-label" for="gridRadios1">
                        Ready
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="status" id="gridRadios2" {{ $food->status === 1 ? 'checked=""' : "" }}>
                    <label class="form-check-label" for="gridRadios2">
                        Cancel
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>

    {{--    Description js--}}

    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <script src="{{asset('ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
@endsection

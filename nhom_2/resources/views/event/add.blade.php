@extends('admin.main')

@section('content')
    <form class="row g-3" action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="inputTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputTitle" name="title">
        </div>
        <div class="col-12">
            <label for="upload" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="upload">
        </div>
        <div class="col-12">
            <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-12">
                <textarea id="content" name="content"></textarea>
            </div>
        </div>
        <div class="col-12">
            <label for="inputDate" class="col-sm-2 col-form-label">Start time</label>
            <div class="col-sm-12">
                <input type="datetime-local" class="form-control" name="start_time">
            </div>
        </div>
        <div class="col-12">
            <label class="form-label">Status</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="1">Has not happened yet</option>
                    <option value="2">Happenning</option>
                    <option value="3">Finished</option>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <script src="{{asset('ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content'), {
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

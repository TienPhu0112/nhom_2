@extends('admin.main')

@section('content')
    <form class="row g-3" action="{{route('event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="inputNanme4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputNanme4" name="title" value="{{ $event->title }}">
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <br>
            <img src="{{asset($event->image)}}" style="width:250px; margin-bottom: 5px;">
        </div>
        <div class="col-12">
            <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-12">
                <textarea id="content" name="content">
                    {!! $event->content !!}
                </textarea>
            </div>
        </div>
        <div class="col-12">
            <label for="inputDate" class="col-sm-2 col-form-label">Start time</label>
            <div class="col-sm-12">
                <input type="datetime-local" class="form-control" name="start_time" value="{{ $event->start_time }}">
            </div>
        </div>
        <div class="col-12">
            <label class="form-label">Status</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="1" {{ $event->status==1  ? 'selected=""' : ''}}>Has not happened yet</option>
                    <option value="2" {{ $event->status==2  ? 'selected=""' : ''}}>Happenning</option>
                    <option value="3" {{ $event->status==2  ? 'selected=""' : ''}}>Finished</option>
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
    <script>
        ClassicEditor
            .create( document.querySelector( '#sub_content'), {
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


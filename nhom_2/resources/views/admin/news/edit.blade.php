@extends('admin.main')

@section('content')
    <form class="row g-3" action="{{route('news.update',$news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label class="form-label">Author ID</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="author_id">
                    @foreach($lsUser as $user)
                        <option value="{{ $user->id }}" {{ $news->author_id===$user->id ? 'selected=""' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <label class="form-label">Topic</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="topic">
                    <option value="1" {{ $news->topic==1  ? 'selected=""' : ''}}>Cooking Recipe</option>
                    <option value="2" {{ $news->topic==2  ? 'selected=""' : ''}}>Delicious Foods</option>
                    <option value="3" {{ $news->topic==3  ? 'selected=""' : ''}}>Event Design</option>
                    <option value="4" {{ $news->topic==4  ? 'selected=""' : ''}}>Restaurant Place</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label for="inputNanme4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputNanme4" name="title" value="{{ $news->title }}">
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <br>
            <img src="{{asset($news->image)}}" style="width:250px; margin-bottom: 5px;">
        </div>
        <div class="col-12">
            <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-12">
                <textarea id="content" name="content">
                    {!! $news->content !!}
                </textarea>
            </div>
        </div>
        <div class="col-12">
            <label for="inputPassword" class="col-sm-2 col-form-label">Sub Content</label>
            <div class="col-sm-12">
                <textarea id="sub_content" name="sub_content">
                    {!! $news->sub_content !!}
                </textarea>
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


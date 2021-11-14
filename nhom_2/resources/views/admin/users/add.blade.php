@extends('admin.main')

@section('content')
    <form  method="post" action="{{route('user.store')}}"
           enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="role">
                    <option value="0">Admin</option>
                    <option value="1">Staff</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Avatar</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="avatar" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" name="password">
            </div>
        </div>

        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form><!-- End General Form Elements -->
@endsection

@extends('admin.main')

@section('content')
    <form class="row g-3">
        <div class="col-12">
            <label class="form-label">Author ID</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label class="form-label">Topic</label>
            <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label for="inputNanme4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputNanme4">
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
@endsection

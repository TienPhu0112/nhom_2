
@extends('admin.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Food</h5>

                    <!-- General Form Elements -->
                        <form @class('form') method="post" action="{{route('food.update', $food->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Dish Type</label>
                                    <select class="input--style-4" type="text" name="dishtype_id" required>
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
                                <label for="inputNumber" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="status" name="status" value="{{$food->status}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Save Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

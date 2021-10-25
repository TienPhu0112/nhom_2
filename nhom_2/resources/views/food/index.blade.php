@extends('admin.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">FOOD</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
{{--                        Add--}}
                        <a class="btn btn-primary rounded-pill"
                           style="margin-bottom: 10px;"
                           href="{{asset('admin/food/create')}}">Add New</a>
{{--                        End Add--}}

                        @if(session('msg'))
                            <div @class('alert alert-success')>
                                {{session('msg')}}
                            </div>
                        @endif

                        @if(session('error'))
                            <div @class('alert alert-danger')>
                                {{session('error')}}
                            </div>
                    @endif

                    <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($lsFood as $food)
                                <tr>
                                    <th>{{$food->id}}</th>
                                    <td>{{$food->name}}</td>
                                    <td><img src="{{asset($food->image)}}" style="width:110px"></td>
                                    <td>{{$food->price}}</td>
                                    <th>{{$food->sale_price}}</th>
                                    <th>
                                        <p>{{$food->created_at->format('d/m/Y')}}</p>
                                        <p>{{$food->created_at->format('H:i:s')}}</p>
                                    </th>
                                    <td>
                                        <p>{{$food->updated_at->format('d/m/Y')}}</p>
                                        <p>{{$food->updated_at->format('H:i:s')}}</p>
                                    </td>
                                    <td>
                                        <a class="btn btn-link" href="{{route("food.edit",$food->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Delete food {{$food->name}}?')" method="POST" action="{{route('food.destroy',$food->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-primary rounded-pill" type="submit"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS Files -->

    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="public/assets/vendor/php-email-form/validate.js"></script>
    <script src="public/assets/vendor/quill/quill.min.js"></script>
    <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="public/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="public/assets/vendor/chart.js/chart.min.js"></script>
    <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="public/assets/vendor/echarts/echarts.min.js"></script>

    <!-- Template Main JS File -->
    <script src="public/assets/js/main.js"></script>

@endsection

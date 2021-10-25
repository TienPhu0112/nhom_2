@extends('admin.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DISH TYPE</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                        <a class="btn btn-primary rounded-pill"
                           style="margin-bottom: 10px;"
                           href="{{asset('admin/type/create')}}">Add New</a>

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
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($lsType as $type)
                                <tr>
                                    <th>{{$type->id}}</th>
                                    <td>{{$type->name}}</td>
                                    <th>{{$type->created_at}}</th>
                                    <td>{{$type->updated_at}}</td>
                                    <td>
                                        <a href="{{route("type.edit",$type->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Delete type {{$type->name}}?')" method="POST" action="{{route('type.destroy',$type->id)}}">
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

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

@endsection
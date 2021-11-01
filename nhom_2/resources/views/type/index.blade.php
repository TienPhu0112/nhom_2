@extends('admin.main')

@section('content')

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
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsType as $type)
            <tr>
                <th>{{$type->id}}</th>
                <td>{{$type->name}}</td>
                <td>{{$type->created_at->format('d/m/Y')}}
                    - {{ $type->created_at->diffForHumans() }}</td>
                <td>
                    @if(isset($type->updated_at))
                        {{$type->updated_at->format('d/m/Y')}}
                    - {{ $type->updated_at->diffForHumans() }}</td>
                    @endif
                <td>
                    <a href="{{route("type.edit", $type->id)}}" class="btn btn-primary rounded-pill">
                        <i class="bx bxs-edit"></i>
                    </a>
                </td>
                <td>
                    <form onsubmit="return confirm('Delete type {{$type->name}}?')" method="POST" action="{{route('type.destroy',$type->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger rounded-pill" type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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

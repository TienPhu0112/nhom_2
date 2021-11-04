@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Topic</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsImg as $key => $img)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>
                    {{ $img->topic == 1 ? "Interior" : "" }}
                    {{ $img->topic == 2 ? "Food" : "" }}
                    {{ $img->topic == 3 ? "Events" : "" }}
                    {{ $img->topic == 4 ? "VIP Guests" : "" }}
                </td>
                <td>
                    <img src="{{ asset($img->image) }}" alt="" style="width: 200px">
                </td>
                <td style="width: 100px">
                    <a href="{{route("gallery.edit", $img->id)}}" class="btn btn-primary btn-sm">
                        <i class="bx bxs-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $img->id }}, '/admin/gallery/{{ $img->id }}')"
                    >
                        <i class="bx bxs-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function removeRow(id,url){
            if(confirm('Xóa mà không thể khôi phục. Bạn có chắc?')){
                $.ajax({
                    type:'DELETE',
                    datatype: 'JSON',
                    data: { id },
                    url : url,
                    success: function (result){
                        if(result.error === false){
                            alert(result.message);
                            location.reload();
                        }else {
                            alert('Xóa lỗi vui lòng thử lại');
                        }
                    }
                })
            }
        }
    </script>
@endsection

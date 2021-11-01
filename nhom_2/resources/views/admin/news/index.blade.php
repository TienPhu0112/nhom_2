@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Topic</th>
            <th scope="col">Content</th>
            <th scope="col">Sub Content</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsNews as $key => $news)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $news->users->name }}</td>
                <td>{{ $news->title }}</td>
                <td>
                    {{ $news->topic == 1 ? "Cooking Recipe" : "" }}
                    {{ $news->topic == 2 ? "Delicious Foods" : "" }}
                    {{ $news->topic == 3 ? "Event Design" : "" }}
                    {{ $news->topic == 4 ? "Restaurant Place" : "" }}
                </td>
                <td>{{ $news->content }}</td>
                <td>{{ $news->sub_content }}</td>
                <td>{{ $news->created_at }}</td>
                <td style="width: 100px">
                    <a href="{{route("news.edit", $news->id)}}" class="btn btn-primary btn-sm">
                        <i class="bx bxs-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $news->id }}, '/admin/news/{{ $news->id }}')"
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

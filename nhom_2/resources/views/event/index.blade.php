@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Content</th>
            <th scope="col">Start time</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsEvent as $key => $event)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $event->title }}</td>
                <td>
                    <img src="{{ asset($event->image) }}" alt="" style="width: 200px">
                </td>
                <td>{!! $event->content !!}</td>
                <td>{{ $event->start_time}}</td>
                <td>
                    {{ $event->status == 1 ? "Has not happened yet" : "" }}
                    {{ $event->status == 2 ? "Happenning" : "" }}
                    {{ $event->status == 3 ? "Finished" : "" }}
                </td>
                <td style="width: 100px">
                    <a href="{{route("event.edit", $event->id)}}" class="btn btn-primary btn-sm">
                        <i class="bx bxs-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $event->id }}, 'event/{{ $event->id }}')"
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
            if(confirm('Deleted without being able to recover. Are you sure?')){
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
                            alert('Clear error please try again');
                        }
                    }
                })
            }
        }
    </script>
@endsection


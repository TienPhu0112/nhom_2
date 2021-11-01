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
                <td>{{ $news->topic }}</td>
                <td>{{ $news->content }}</td>
                <td>{{ $news->sub_content }}</td>
                <td>{{ $news->created_at }}</td>
                <td>
                    <a href="{{route("news.edit", $news->id)}}" class="btn btn-primary btn-sm">
                        <i class="bx bxs-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

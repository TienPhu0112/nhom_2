@extends('admin.main')
@section('content')
    <div class="container">
        <p>Table Management</p>

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

        <form action="{{route('table.index')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="title">Type:</label>
                <input class="form-control" type="text" name="seach_type"/>
            </div>
            <input type="submit" value="Seach">
        </form>
        <hr/>
        <a href="{{asset('table/create')}}" class="btn btn-primary">Add new</a>
        <hr>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Status</th>

            </tr>
            @foreach($lsTable as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>{{$table->type}}</td>
                    <td>
                        @if($table->status == 0)
                            OPEN
                        @endif
                        @if($table->status == 1)
                            <span style =" color: red; font-width: bold;"> CONFIRM</span>
                        @endif
                        @if($table->status == 2)
                            <span style =" color: blue; font-width: bold;">DONE</span>
                        @endif
                        @if($table->status == 3)
                            <span style =" color: red; font-width: bold;">CANCEL</span>
                        @endif
                    </td>
                    <td>
                        @if($table->status == 0 || $table->status == 1 ||$table->status == 2 ||$table->status == 3)
                            <a data-toggle="modal" data-target="#exampleModal" class="btb btn-primary"
                               data-tableid="{{$table->id}}" href="#">Change status</a>
                        @endif
                            <form onsubmit="return" method="POST" action="{{route('table.destroy', $table->id)}}">

                                @method('DELETE')
                                <input type="submit" value="Delete"/>
                            </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$lsTable->links("pagination::bootstrap-4")}}
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status</label>
                            <input type="hidden" name="selected_tableid" id="select_tableid">
                            <select class="form-control" name="new_status" id="new_status">
                                <option value="1">CONFIRM</option>
                                <option value="2">DONE</option>
                                <option value="3">CANCEL</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="Change">Change</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('tableid') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#selected_tableid').val(recipient)
            });

            $('#Change').click(function (){
                var data={
                    'id': $("#selected_tableid").val(),
                    'status': $("#new_status").val(),
                    '_token': "{{csrf_token()}}"

                }

                $.get({
                    url: 'T2011E/Laravel/nhom_2/nhom_2/public/api/admin/changeStatusJson',
                    data: data,
                    success: function(response) {
                        alert(response.desc);
                        location.reload();
                    },
                    error: function(response) {
                        alert(response);
                    }
                });
            });

        });
    </script>
@endsection

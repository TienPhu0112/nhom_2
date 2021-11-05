@extends('admin.main')
@section('content')
    <div class="container">
        <p>Order Management</p>
        {{--        <p>{{$title}}</p>  cach truyen du lieu lay the key-value--}}

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

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Customer name</th>
                <th>Customer address</th>
                <th>Customer phone</th>
                <th>Order date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach($lsOrder as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->customer->first_name}} {{$order->customer->last_name}}</td>
                    <td>{{$order->customer->address}}</td>
                    <td>{{$order->customer->phone}}</td>
                    <td>{{$order->created_at->format('d/m/Y H:i:s')}} -
                        {{$order->created_at->diffForHumans()}}</td>
                    <td>{{number_format($order->total,2)}}</td>
                    <td>
                        @if($order->status == 0)
                            OPEN
                        @endif

                        @if($order->status == 1)
                            <span style="color:pink">CONFIRM</span>
                        @endif

                        @if($order->status == 2)
                            <span style="color:blue">DONE</span>
                        @endif
                        @if($order->status == 3)
                            <span style="color:red">CANCEL</span>
                        @endif
                    </td>
                    <td>
                        @if($order->status == 0 || $order->status == 1 || $order->status == 2 )

                            <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                               data-orderid="{{$order->id}}" href="#">Change status</a>
                            <a class="btn btn-primary" href="{{route('order.update', $order->id)}}">View order</a>
                        @else
                            <a class="btn btn-primary" href="{{route('order.update', $order->id)}}">View order</a>
                        @endif

                    </td>
                    {{--                        <a href="{{route("order.edit",$order->id)}}">Edit</a>--}}
                    {{--                        --}}{{--                        <a href="#">Delete</a>--}}
                    {{--                        <form onsubmit="return confirm('Are you sure?')" method="POST" action="{{route('order.destroy',$order->id)}}">--}}
                    {{--                            @csrf--}}
                    {{--                            @method('DELETE')--}}
                    {{--                            <input type="submit" value="Delete">--}}
                    {{--                        </form>--}}
                </tr>
            @endforeach
        </table>
        {{$lsOrder->links("pagination::bootstrap-4")}}
    </div>

    <!-- Modal -->
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
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <input type="hidden" name="selected_orderid" id="selected_orderid">
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
                    <button type="button" class="btn btn-primary" id="change">Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('orderid') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#selected_orderid').val(recipient)
            });

            $("#change").click(function() {
                var data = {
                    'id' : $("#selected_orderid").val(),
                    'status' : $("#new_status").val(),
                    "_token": "{{ csrf_token() }}"
                }

                $.get({
                    url: '/api/admin/changeStatusJson',
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

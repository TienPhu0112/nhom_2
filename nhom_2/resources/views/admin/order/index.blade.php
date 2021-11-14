@extends('admin.main')

@section('content')
    <table class="table datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Guest Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Tabe Type</th>
            <th scope="col">Guest Number</th>
            <th scope="col">Booking Date</th>
            <th scope="col">Booking Time</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsOrder as $key => $order)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->type }} Seats</td>
                <td>{{ $order->guest_number }}</td>
                <td>{{ $order->booking_date }}</td>
                <td>{{ $order->booking_time }}</td>
                @if($order->status == 0)
                    <td>Waiting</td>
                @endif
                @if($order->status == 1)
                    <td>Already Served</td>
                @endif
                @if($order->status == 2)
                    <td>Cancelled</td>
                @endif
                <td style="width: 93px">
                    @if($order->status == 0 || $order->status == 1)
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-orderid="{{$order->id}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title data-bs-original-title="Change reservation status">
                        <i class="bx bxs-edit"></i>
                    </a>
                        <a href="{{route('order.update', $order->id)}}" class="btn btn-info btn-sm"
                           data-bs-toggle="tooltip" data-bs-placement="bottom" title data-bs-original-title="View Reservation"
                        >
                            <i class="ri-eye-fill"></i>
                        </a>
                    @else
                        <a href="{{route('order.update', $order->id)}}" class="btn btn-info btn-sm"
                           data-bs-toggle="tooltip" data-bs-placement="bottom" title data-bs-original-title="View Reservation"
                        >
                            <i class="ri-eye-fill"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-select" name="new_status" id="new_status">
                                <option value="0">Waiting</option>
                                <option value="1">Already Served</option>
                                <option value="2">Cancelled</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="change">Change</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
                    url: '/api/admin/changeStatus',
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

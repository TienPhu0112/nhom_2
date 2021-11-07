@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Khách</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Loại Bàn Đặt</th>
            <th scope="col">Số lượng khách</th>
            <th scope="col">Ngày Hẹn Đặt</th>
            <th scope="col">Thời gian Hẹn Đặt</th>
            <th scope="col">Trạng Thái</th>
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
                <td>Bàn {{ $order->type }}</td>
                <td>{{ $order->guest_number }}</td>
                <td>{{ $order->booking_date }}</td>
                <td>{{ $order->booking_time }}</td>
                @if($order->status == 0)
                    <td>Đang chờ</td>
                @endif
                @if($order->status == 1)
                    <td>Đã phục vụ</td>
                @endif
                @if($order->status == 2)
                    <td>Đã hủy</td>
                @endif
                <td style="width: 85px">
                    <a href="{{route("order.edit", $order->id)}}" class="btn btn-primary btn-sm">
                        <i class="bx bxs-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $order->id }}, '/admin/order/{{ $order->id }}')"
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
            if(confirm('Deleted Without Recovering Are You Sure?')){
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
                            alert('Delete Error Please Try Again');
                        }
                    }
                })
            }
        }
    </script>
@endsection

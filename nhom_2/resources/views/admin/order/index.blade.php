@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Khách</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Bàn Đặt</th>
            <th scope="col">Ngày Hẹn Đặt</th>
            <th scope="col">Trạng Thái</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsOrder as $key => $order)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $order->customers->name }}</td>
                <td>{{ $order->customers->phone }}</td>
                <td>Bàn {{ $order->tables->type }}</td>
                <td>{{ $order->booking_date }}</td>
                @if($order->status == 0)
                <td>Đang chờ</td>
                @endif
                @if($order->status == 1)
                    <td>Đang sử dụng</td>
                @endif
                @if($order->status == 2)
                    <td>Đã sử dụng</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

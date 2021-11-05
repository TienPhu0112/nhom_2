@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Guest Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Table Set</th>
            <th scope="col">Date of Appointment Book</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lsOrder as $key => $order)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $order->customers->name }}</td>
                <td>{{ $order->customers->phone }}</td>
                <td>Table {{ $order->tables->type }}</td>
                <td>{{ $order->booking_date }}</td>
                @if($order->status == 0)
                <td>Booked a table</td>
                @endif
                @if($order->status == 1)
                    <td>Using</td>
                @endif
                @if($order->status == 2)
                    <td>End or Cancel</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

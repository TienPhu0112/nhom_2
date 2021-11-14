@extends('admin.main')
@section('content')
    <div class="container">
        @if(session()->has('success'))
        @endif
    </div>
    <a href="{{route('food_order.index')}}">Back</a>
        <hr/>
        <p>Customer Name: {{$order->customers->name}} </p>
        <p>Customer Address: {{$order->customers->address}} </p>
        <p>Customer Email: {{$order->customers->email}} </p>
        <p>Customer Phone: {{$order->customers->phone}} </p>
        <p>Order Date: {{$order->created_at->format('d/m/Y H:i:s')}} -
            {{$order->created_at->diffForHumans()}} </p>
        <hr/>
        <h4>Foods Order</h4>
        <table class="table">
            <tr>
                <th>Product id</th>
                <th>Product name</th>
                <th>Product quantity</th>
                <th>Product price</th>
            </tr>
            @foreach($order->foodOrders as $foodOrders)
                <tr>
                    <td>{{$foodOrders->foods->id}}</td>
                    <td>{{$foodOrders->foods->name}}</td>
                    <td>{{$foodOrders->food_quantity}}</td>
                    <td>${{$foodOrders->foods->price}}</td>
                </tr>
            @endforeach
        </table>
        <h4>Total: ${{number_format($order->total)}}</h4>
        <h4>Status:
            @if($order->status == 0)
                OPEN
            @endif

            @if($order->status == 1)
                CONFIRM
            @endif

            @if($order->status == 2)
                DONE
            @endif
            @if($order->status == 3)
                CANCEL
            @endif
        </h4>
    @if($order->status == 0)
        <a class="btn btn-primary" href="{{asset('admin/changeOrderStatus')}}/1/{{$order->id}}">Change to CONFIRM</a>
        <a class="btn btn-primary" href="{{asset('admin/changeOrderStatus')}}/3/{{$order->id}}">Change to CANCEL</a>
    @endif
    @if($order->status == 1)
        <a class="btn btn-primary" href="{{asset('admin/changeOrderStatus')}}/2/{{$order->id}}">Change to DONE</a>
        <a class="btn btn-primary" href="{{asset('admin/changeOrderStatus')}}/3/{{$order->id}}">Change to CANCEL</a>
    @endif
    @if($order->status == 2)
        <a class="btn btn-primary" href="{{asset('admin/changeOrderStatus')}}/3/{{$order->id}}">Change to CANCEL</a>
    @endif
@endsection

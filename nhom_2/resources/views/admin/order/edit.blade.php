@extends('admin.main')

@section('content')
    <form action="{{route('order.update' , $order->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="name" value="{{$order->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="phone" value="{{$order->phone}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" value="{{$order->email}}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="2" {{ $order->type == 2 ? 'selected' : "" }}>2 Seats</option>
                    <option value="4" {{ $order->type == 4 ? 'selected' : "" }}>4 Seats</option>
                    <option value="6" {{ $order->type == 6 ? 'selected' : "" }}>6 Seats</option>
                    <option value="8" {{ $order->type == 8 ? 'selected' : "" }}>8 Seats</option>
                    <option value="10" {{ $order->type == 10 ? 'selected' : "" }}>10 Seats</option>
                    <option value="12" {{ $order->type == 12 ? 'selected' : "" }}>12 Seats</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Guest Number</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="guest_number" value="{{ $order->guest_number }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Booking Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="booking_date" value="{{$order->booking_date}}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Booking Time</label>
            <div class="col-sm-10">
                <select class="form-select" name="booking_time" >
                    <option {{ $order->booking_time === "9:00:00" ? 'selected' : "" }}>9:00</option>
                    <option {{ $order->booking_time === "11:00:00" ? 'selected' : "" }}>11:00</option>
                    <option {{ $order->booking_time === "13:00:00" ? 'selected' : "" }}>13:00</option>
                    <option {{ $order->booking_time === "15:00:00" ? 'selected' : "" }}>15:00</option>
                    <option {{ $order->booking_time === "17:00:00" ? 'selected' : "" }}>17:00</option>
                    <option {{ $order->booking_time === "19:00:00" ? 'selected' : "" }}>19:00</option>
                </select>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" {{$order->status == 0 ? 'checked=""' : ""}}>
                    <label class="form-check-label" for="gridRadios1">
                        Waiting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" {{$order->status == 1 ? 'checked=""' : ""}}>
                    <label class="form-check-label" for="gridRadios2">
                        Already Served
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios3" value="2" {{$order->status == 2 ? 'checked=""' : ""}}>
                    <label class="form-check-label" for="gridRadios3">
                        Cancelled
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
@endsection

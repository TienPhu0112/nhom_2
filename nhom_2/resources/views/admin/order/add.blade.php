@extends('admin.main')

@section('content')
    <form action="{{route('order.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="phone">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="2">Bàn 2</option>
                    <option value="4">Bàn 4</option>
                    <option value="6">Bàn 6</option>
                    <option value="8">Bàn 8</option>
                    <option value="10">Bàn 10</option>
                    <option value="12">Bàn 12</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Guest Number</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="guest_number">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Booking Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="booking_date">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputTime" class="col-sm-2 col-form-label">Booking Time</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" name="booking_time">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" checked="">
                    <label class="form-check-label" for="gridRadios1">
                        Đang chờ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1">
                    <label class="form-check-label" for="gridRadios2">
                        Đã phục vụ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios3" value="2">
                    <label class="form-check-label" for="gridRadios3">
                        Đã hủy
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

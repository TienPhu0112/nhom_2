@extends('admin.main')

@section('content')
    <form action="{{route('order.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Customer ID</label>
            <div class="col-sm-10">
                <select class="form-select" name="customer_id">
                    @foreach($lsCus as $cus)
                    <option value="{{ $cus->id }}">{{ $cus->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Table Type</label>
            <div class="col-sm-10">
                <select class="form-select" name="table_id">
                    @foreach($lsTable as $table)
                        <option value="{{ $table->id }}">{{$table->type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="booking_date">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Trạng Thái</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="status" id="gridRadios1" checked="">
                    <label class="form-check-label" for="gridRadios1">
                        Đang chờ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="status" id="gridRadios2">
                    <label class="form-check-label" for="gridRadios2">
                        Đang sử dụng
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="status" id="gridRadios">
                    <label class="form-check-label" for="gridRadios3">
                        Đã sử dụng
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="row mb-3">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </div>

    </form>
@endsection

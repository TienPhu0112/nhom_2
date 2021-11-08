@extends('admin.main')

@section('content')
    <div class="card profile">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview active show" id="profile-overview">

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Guest Name</div>
                        <div class="col-lg-9 col-md-8">{{ $order->name }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone Number</div>
                        <div class="col-lg-9 col-md-8">{{ $order->phone }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{ $order->email }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Table Type</div>
                        <div class="col-lg-9 col-md-8">{{ $order->type }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Guest Number</div>
                        <div class="col-lg-9 col-md-8">{{ $order->guest_number }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Booking Time</div>
                        <div class="col-lg-9 col-md-8">{{ $order->booking_date }} &nbsp; {{ $order->booking_time }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Status</div>
                        <div class="col-lg-9 col-md-8">
                            {{ $order->status == 0 ? "Waiting" : ""  }}
                            {{ $order->status == 1 ? "Already Served" : ""  }}
                            {{ $order->status == 2 ? "Cancelled" : ""  }}
                        </div>
                    </div>

                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>
@endsection

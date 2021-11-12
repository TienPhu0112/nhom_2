@extends('admin.main')
@section('content')


        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Bookings Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Bookings <br> <span>Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-table"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$total_Booking}}</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Bookings Card -->

                        <!-- Orders Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Orders <br> <span>This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$total_TogoOrder}}</h6>
                                            <span class="text-success small pt-1 fw-bold">18%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Orders Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Revenue<br> <span> This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>${{$total_Revenue}}</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->


                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/This Year</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {

                                            new ApexCharts(document.querySelector("#reportsChart"),{

                                                series: [{
                                                            name: 'Bookings',
                                                            data: [{{$bookingJan}}, {{$bookingFeb}}, {{$bookingMar}}, {{$bookingApr}}, {{$bookingMay}}, {{$bookingJun}}, {{$bookingJul}}, {{$bookingAug}}, {{$bookingSep}}, {{$bookingOct}}, {{$bookingNov}}, {{$bookingDec}}],
                                                        }, {
                                                            name: 'Orders',
                                                            data: [{{$orderJan}}, {{$orderFeb}}, {{$orderMar}}, {{$orderApr}}, {{$orderMay}}, {{$orderJun}}, {{$orderJul}}, {{$orderAug}}, {{$orderSep}}, {{$orderOct}}, {{$orderNov}}, {{$orderDec}}]
                                                        }],
                                                chart: {
                                                            height: 350,
                                                            type: 'area',
                                                            toolbar: {
                                                                show: false
                                                            },
                                                        },
                                                markers: {
                                                            size: 4
                                                        },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                            type: "gradient",
                                                            gradient: {
                                                                shadeIntensity: 1,
                                                                opacityFrom: 0.3,
                                                                opacityTo: 0.4,
                                                                stops: [0, 90, 100]
                                                            }
                                                        },
                                                dataLabels: {
                                                            enabled: false
                                                        },
                                                stroke: {
                                                            curve: 'smooth',
                                                            width: 2
                                                        },
                                                xaxis: {
                                                            categories: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"]
                                                        },
                                                tooltip: {
                                                            x: {
                                                                format: 'MM'
                                                            },
                                                        }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Recent Bookings -->
                        <div class="col-12">
                            <div class="card recent-sales">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Bookings <span>| This Month</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Table Type</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lsBooking as $booking)
                                           <tr>
                                                <td>{{$booking->id}}</td>
                                                <td><a href="#" class="text-primary">{{$booking->name}}</a></td>
                                                <td>{{$booking->type}}</td>
                                                <td>{{$booking->created_at}}</td>
                                                <td>
                                                   @if($booking->status == 0)
                                                       <span class="badge bg-primary">Waiting</span>
                                                   @endif

                                                   @if($booking->status == 1)
                                                       <span class="badge bg-success">Already Served</span>
                                                   @endif

                                                   @if($booking->status == 2)
                                                       <span class="badge bg-danger">Cancelled</span>
                                                   @endif
                                                </td>
                                           </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Bookings -->

                        <!-- Recent Orders -->
                        <div class="col-12">
                            <div class="card recent-sales">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Orders <span>| This Month</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lsTogoOrder as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td><a href="#" class="text-primary">{{$order->customers->name}}</a></td>
                                                <td>{{$order->total}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>
                                                        @if($order->status == 0)
                                                            <span class="badge bg-primary">OPEN</span>
                                                        @endif

                                                        @if($order->status == 1)
                                                            <span class="badge bg-warning">CONFIRM</span>
                                                        @endif

                                                        @if($order->status == 2)
                                                            <span class="badge bg-success">DONE</span>
                                                        @endif
                                                        @if($order->status == 3)
                                                            <span class="badge bg-danger">CANCEL</span>
                                                        @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Orders -->

                        <!-- Food sales statistics -->
                        <div class="col-12">
                            <div class="card top-selling">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Food sales statistics <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lsFood as $food)
                                            <th scope="row">{{$food->id}}</th>
                                            <td><a href="#" class="text-primary fw-bold">{{$food->name}}</a></td>
                                            <th scope="row"><img src="{{$food->image}}" width="59.99" height="45.99"></th>
                                            <td>{{$food->price}}</td>
                                                <span hidden>
                                                    {{$qty = 0}}
                                                    @foreach($lsSuccess as $success)
                                                        @if($success->food_id == $food->id)
                                                            {{$qty += $success->food_quantity}}
                                                        @endif
                                                    @endforeach
                                                </span>
                                            <td class="fw-bold">
                                                {{$qty}}
                                            </td>
                                            <td>${{$food->price * $qty}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- Food sales statistics -->

                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

<!-- End #main -->

        {{--    Fontawesome--}}
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>


@endsection

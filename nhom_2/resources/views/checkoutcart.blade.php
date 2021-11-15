@extends("layout.frontend")
<!-- Core Style CSS -->
<link rel="stylesheet" href="{{asset('cartfile/css/core-style.css')}}">
<link rel="stylesheet" href="{{asset('cartfile/style.css')}}">
<!-- Responsive CSS -->
<link href="{{asset('cartfile/css/responsive.css')}}" rel="stylesheet">
@section('content')
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Check Out
        </h2>
    </section>
    <!-- ****** Checkout Area Start ****** -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading">
                            <h4>Billing Address</h4>
                            <p>Enter your cupone code (Available Soon)</p>
                        </div>

                        <form action="{{route('place_order')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="address">Address <span>*</span></label>
                                    <input type="text" class="form-control mb-3" id="address" name="address" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone">Phone<span>*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" min="0" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="" required>
                                </div>

                                <div class="col-12 m-t-10 m-b-10">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked required>
                                        <label class="custom-control-label" for="customCheck1">Terms and conditions</label>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn karl-checkout-btn" value="Place Order" />
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h4>Your Order</h4>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><h6>Product</h6> <h6>Total</h6></li>
                            @foreach(Cart::content() as $row)
                                <li>
                                    <span>{{$row->name}} ({{$row->qty}})</span>
                                    <span>{{$row->total}}</span>
                                </li>
                            @endforeach
                            <li><span>Subtotal</span> <span>{{Cart::total()}}</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span>Total</span> <span>{{Cart::total()}}</span></li>
                        </ul>


                        <div id="accordion" role="tablist" class="mb-4">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <input type="radio" id="delivery" name="payment" value="delivery" required checked>
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cash on delivery</a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Cash upon receipt of goods</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <input type="radio" id="paypal" name="payment" value="paypal" disabled>
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Paypal (Available Soon)</a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The Paypal payment method is in the final stage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h6 class="mb-0">
                                        <input type="radio" id="credit_card" name="payment" value="credit_card" disabled>
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Credit card (Available Soon)</a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The Credit Card payment method is in the final stage</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ****** Checkout Area End ****** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="cartfile/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="cartfile/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="cartfile/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="cartfile/js/plugins.js"></script>
    <!-- Active js -->
    <script src="cartfile/js/active.js"></script>
@endsection

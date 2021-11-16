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
                                    <span>${{$row->total}}</span>
                                </li>
                            @endforeach
                            <li><span>Subtotal</span> <span>${{Cart::total()}}</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span>Total</span> <span>${{Cart::total()}}</span></li>
                        </ul>

                        <div class="cart-page-footer" id="paid" style="display: none">
                            <span style="text-align: center; color: green; font-size: 18px; font-weight: 500"><i class="fa fa-check" aria-hidden="true"></i> Your order has been paid!</span>
                        </div>
                        <div id="accordion" role="tablist" class="mb-4">
                            {{--  Cash on--}}
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                       <a>
                                           <input type="radio" id="delivery" name="payment" value="delivery" checked
                                                  class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           <a>Cash on delivery</a>
                                       </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Cash upon receipt of goods</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Paypal--}}
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a>
                                            <input type="radio" id="paypal" name="payment" value="paypal"
                                                   class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Paypal
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div id="paypal-button"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- American Express--}}
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a>
                                            <input type="radio" id="paypal" name="payment" value="paypal"
                                                   class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" disabled>
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> American Express (Available soon) </a>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>American Express is in the process of completion</p>
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

{{--    Paypal--}}
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ARctVih_-a-2SBStwWi8UZLrmlgTz_nFvrzHKCi9I99nRgj3Xl2jd-LBiae0hZrX9GEkUoKVMYS97DnE',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: '{{Cart::total()}}',
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    window.alert('Thank you for your purchase!');
                    $(document).ready(function(){
                        $('#accordion').hide();
                        $('#paid').show();
                    });
                });
            }
        }, '#paypal-button');
    </script>
@endsection

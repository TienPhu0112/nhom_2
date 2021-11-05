@extends("layout.frontend")
<!-- Core Style CSS -->
<link rel="stylesheet" href="{{asset('cartfile/css/core-style.css')}}">
<link rel="stylesheet" href="{{asset('cartfile/style.css')}}">
<!-- Responsive CSS -->
<link href="{{asset('cartfile/css/responsive.css')}}" rel="stylesheet">
@section('content')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Cart
        </h2>
    </section>
    <!-- ****** Cart Area Start ****** -->
    <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="col-12">
                    <form action="{{route('update_cart')}}" method="POST" >
                        @csrf
                        <div class="col-12">
                            <div class="cart-table clearfix">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
{{--                                        <th>Image</th>--}}
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $row)
                                        <tr>
                                            <td class="cart_product_name d-flex align-items-center">
                                                <h6>{{$row->name}}</h6>
                                            </td>
{{--                                            <td class="cart_product_img">--}}
{{--                                                <img src="{{$row->image}}" width="50.99px" height="50.99px">--}}
{{--                                            </td>--}}
                                            <td class="price"><span>{{$row->price}}</span></td>
                                            <td class="qty">
                                                <input type="hidden" class="qty-text" id="rowid" name="rowid[]" value="{{$row->rowId}}">
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                                        <i class="fa fa-minus" aria-hidden="true">
                                                        </i>
                                                    </span>

                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity[]" value="{{$row->qty}}">

                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                                         <i class="fa fa-plus" aria-hidden="true">

                                                         </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="total_price"><span>{{$row->total}}</span></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-footer d-flex mt-30">
                                <div class="back-to-shop w-50">
                                    <a href="{{asset('/menu')}}">Continue shooping</a>
                                </div>
                                <div class="update-checkout w-50 text-right">
                                    <a href="{{asset('/clear_cart')}}">Clear cart</a>
                                    {{--                            <a href="#">Update cart</a>--}}
                                    <input type="submit" value="Update cart">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>{{Cart::subtotal()}}</span></li>
                                <li><span>Tax</span> <span>{{Cart::tax()}}</span></li>
                                <li><span><strong>Total</strong></span> <span><strong>{{Cart::total()}}</strong></span></li>
                            </ul>
                            <a href="{{asset('/checkoutcart')}}" class="btn karl-checkout-btn">Proceed to checkout</a>
{{--                            <a href="#" class="btn karl-checkout-btn">Proceed to checkout</a>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ****** Cart Area End ****** -->

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

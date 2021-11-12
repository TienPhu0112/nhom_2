@extends("layout.frontend")
@section('content')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Order success
        </h2>
    </section>
    <div class="container">
        <div class="m-t-20">
            <h2 style="text-align: center; font-weight: 600">Your order has been successfully placed!</h2>
        </div>
        <div class="m-t-20">
            <h4>Orders are being prepared</h4>
            <p>Check your order via email and please wait shipping...</p>
        </div>
        <div class="image m-t-20">
            <img src="images/shipper.jpg" style="margin-left: 15%" width="811.99" height="408" alt="IMG-OUR">
        </div>
        <div class="m-t-20">
            <h3>Thank you for using our service. Wishing you a delicious!</h3>
        </div>
        <div class="image m-t-20">
            <img src="images/thankyou.jpg" style="margin-left: 15%" width="811.99" height="408" alt="IMG-OUR">
        </div>
        <div class="m-t-20 m-b-20">
            <div class="row">
                <a style="font-size: 25px; font-weight: 600; text-transform: uppercase" href="{{asset('/menu')}}">>> Continue shooping</a>
            </div>
        </div>
    </div>

@endsection


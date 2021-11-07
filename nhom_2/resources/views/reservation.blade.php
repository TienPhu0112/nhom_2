@extends('layout.frontend')

@section('content')

    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Reservation
        </h2>
    </section>
<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Book table
                    </h3>
                </div>

                <form class="wrap-form-reservation size22 m-l-r-auto" action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Date -->
                            <span class="txt9">
									Date
								</span>

                            <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"  id="booking_date" name="booking_date">
                                <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Time -->
                            <span class="txt9">
									Time
								</span>

                            <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <!-- Select2 -->
                                <select class="selection-1" name="booking_time" >
                                    <option>9:00</option>
                                    <option>11:00</option>
                                    <option>13:00</option>
                                    <option>15:00</option>
                                    <option>17:00</option>
                                    <option>19:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- People -->
                            <span class="txt9">
									People
								</span>

                            <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <!-- Select2 -->
                                <select class="selection-1" name="people" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Name -->
                            <span class="txt9">
									Name
								</span>

                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="name" name="name"  placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Phone -->
                            <span class="txt9">
									Phone
								</span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Email -->
                            <span class="txt9">
									Email
								</span>

                            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <input type="hidden" value="0" name="status">

                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        @if(session('msg'))
                            <div @class('alert alert-success')>
                                {{session('msg')}}
                            </div>
                        @endif
                        @if(session('msg_f'))
                            <div @class('alert alert-danger')>
                                {{session('msg_f')}}
                            </div>
                        @endif
                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Book Table
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="info-reservation flex-w p-t-80">
            <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                <h4 class="txt5 m-b-18">
                    Reserve by Phone
                </h4>

                <p class="size25">
                    Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
                    <span class="txt25">Nulla vulputate</span>
                    , lectus vel volutpat efficitur, orci
                    <span class="txt25">lacus sodales</span>
                    sem, sit amet quam:
                    <span class="txt24">(001) 345 6889</span>
                </p>
            </div>

            <div class="size24 w-full-md p-t-40">
                <h4 class="txt5 m-b-18">
                    For Event Booking
                </h4>

                <p class="size26">
                    Donec feugiat ligula rhoncus:
                    <span class="txt24">(001) 345 6889</span>
                    , varius nisl sed, tinci-dunt lectus sodales sem.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection

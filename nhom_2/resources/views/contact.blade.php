@extends("layout.frontend")

@section('content')
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Contact
        </h2>
    </section>



    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-t-90 p-b-113">
        <!-- Map -->
        <div class="container">
            <div class="map bo8 bo-rad-10 of-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.5186509933137!2d-74.00957788529786!3d40.72861174453735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259f2a6784fab%3A0x38cd75721bbf535b!2s379%20Hudson%20St%208th%20floor%2C%20New%20York%2C%20NY%2010018%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1636698743677!5m2!1svi!2s" width="1250" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Send us a Message
            </h3>
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
            <form class="wrap-form-reservation size22 m-l-r-auto" method="post"
                  action="{{route('contact.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
							Name
						</span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="name"  name="name" placeholder="Name">
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

                    <div class="col-md-4">
                        <!-- Phone -->
                        <span class="txt9">
							Phone
						</span>

                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Message -->
                        <span class="txt9">
							Message
						</span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" type="text" id="message" name="message" placeholder="Message"></textarea>
                    </div>
                </div>



                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <!-- Button3 -->
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4" >
                        Submit
                    </button>
                </div>
            </form>

            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/map-icon.png" alt="IMG-ICON">
                        </div>

                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

                            <span class="txt23 size38">
								8th floor, 379 Hudson St, New York, NY 10018
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

                            <span class="txt23 size38">
								(+1) 96 716 6879
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

                            <span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>Every Day
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

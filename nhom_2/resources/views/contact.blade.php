@extends("layout.frontend")

@section('content')
    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="index.html" class="txt19">Home</a>
            </li>

            <li class="t-center m-b-13">
                <a href="menu.html" class="txt19">Menu</a>
            </li>

            <li class="t-center m-b-13">
                <a href="gallery.html" class="txt19">Gallery</a>
            </li>

            <li class="t-center m-b-13">
                <a href="about.html" class="txt19">About</a>
            </li>

            <li class="t-center m-b-13">
                <a href="blog.html" class="txt19">Blog</a>
            </li>

            <li class="t-center m-b-33">
                <a href="contact.html" class="txt19">Contact</a>
            </li>

            <li class="t-center">
                <!-- Button3 -->
                <a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    Reservation
                </a>
            </li>
        </ul>

        <!-- - -->
        <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
            <!-- - -->
            <h4 class="txt20 m-b-33">
                Gallery
            </h4>

            <!-- Gallery -->
            <div class="wrap-gallery-sidebar flex-w">
                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
                    <img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
                </a>
            </div>
        </div>
    </aside>


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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096841491348!2d105.78049781415747!3d21.0288107931542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd0c66f05%3A0xea31563511af2e54!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1636615552774!5m2!1svi!2s" width="1250" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Send us a Message
            </h3>

            <form class="wrap-form-reservation size22 m-l-r-auto">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
							Name
						</span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Email -->
                        <span class="txt9">
							Email
						</span>

                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Phone -->
                        <span class="txt9">
							Phone
						</span>

                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Message -->
                        <span class="txt9">
							Message
						</span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
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
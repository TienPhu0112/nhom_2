<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Contact Us
                </h4>

                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        8th floor, 379 Hudson St, New York, NY 10018
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        (+1) 96 716 6879
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        contact@site.com
                    </li>
                </ul>

                <!-- - -->
                <h4 class="txt13 m-b-32">
                    Opening Times
                </h4>

                <ul>
                    <li class="txt14">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class="txt14">
                        Every Day
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Latest twitter
                </h4>

                <div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>

                <div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    Gallery
                </h4>

                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    @foreach($lsImg as $key => $img)
                        <a class="item-gallery-footer wrap-pic-w" href="{{ asset($img -> image) }}" data-lightbox="gallery-footer">
                            <img src="{{ asset($img -> image) }}" alt="GALLERY">
                        </a>
                        @if($key == 11)
                            @break
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    <a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                </div>

                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
        </div>
    </div>
</footer>

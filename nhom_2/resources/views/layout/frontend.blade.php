<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="animsition">

<!-- Header -->
@include('layout.header')

<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <a href="{{asset('/')}}" class="txt19">Home</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{asset('/menu')}}" class="txt19">Menu</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ asset('/gallery') }}" class="txt19">Gallery</a>
        </li>

        <li class="t-center m-b-13">
            <a href="#" class="txt19">About</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ asset('/blog') }}" class="txt19">Blog</a>
        </li>

        <li class="t-center m-b-33">
            <a href="#" class="txt19">Contact</a>
        </li>

        <li class="t-center">
            <!-- Button3 -->
            <a href="{{ asset('/reservation') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
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
            @foreach($lsImg as $key => $img)
                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset($img -> image) }}" data-lightbox="gallery-footer">
                    <img src="{{ asset($img -> image) }}" alt="GALLERY">
                </a>
                @if($key == 8)
                    @break
                @endif
            @endforeach
        </div>
    </div>
</aside>

<!-- Slide1 -->

@yield('content')



<!-- Footer -->
@include('layout.footer')


@include('layout.top_button')

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0"><img src="/images/icons/video-16-9.jpg" alt="IMG"></div>
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



@include('layout.script_foot')
@yield('gallery_script')

</body>
</html>

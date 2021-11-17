<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{asset('/')}}">
                        <img src="/images/icons/logo.png" alt="IMG-LOGO" data-logofixed="/images/icons/logo2.png">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{asset('/')}}">Home</a>
                            </li>

                            <li>
                                <a href="{{asset('/menu')}}">Menu</a>
                            </li>

                            <li>
                                <a href="{{asset('/reservation')}}">Reservation</a>
                            </li>

                            <li>
                                <a href="{{asset('/gallery')}}">Gallery</a>
                            </li>

                            <li>
                                <a href="{{asset('/about')}}">About</a>
                            </li>

                            <li>
                                <a href="{{asset('/blog')}}">Blog</a>
                            </li>

                            <li>
                                <a href="{{asset('/contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a href="{{asset('/cart')}}" id="header-cart-btn" target="_blank">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart">{{Cart::count()}}</span>
                    </a>
                    <a href="https://www.tripadvisor.com.vn/"><i class="fa fa-tripadvisor m-l-21" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>


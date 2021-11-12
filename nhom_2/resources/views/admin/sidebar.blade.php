<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin')}}">
                <i class="ri-home-4-fill"></i><span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-receipt"></i><span>Table Reservation</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/order')}}">
                        <i class="bi bi-circle"></i><span>Table Reservations List</span>
                    </a>

                    <a href="{{asset('admin/order/create')}}">
                        <i class="bi bi-circle"></i><span>Add Table Reservations</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav5" data-bs-toggle="collapse" href="#">

                <i class="ri-reserved-line"></i><span>Table</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/table')}}">
                        <i class="bi bi-circle"></i><span>Table List</span>
                    </a>

                    <a href="{{asset('admin/table/create')}}">
                        <i class="bi bi-circle"></i><span>Add Table</span>
                    </a>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-face"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/customer')}}">

                        <i class="bi bi-circle"></i><span>List Of Customers</span>
                    </a>
                    <a href="{{asset('admin/customer/create')}}">
                        <i class="bi bi-circle"></i><span>Add More Customers</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-food-menu"></i><span>Type Of Food</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/type')}}">

                        <i class="bi bi-circle"></i><span>Food Type List</span>
                    </a>
                    <a href="{{asset('admin/type/create')}}">
                        <i class="bi bi-circle"></i><span>Add Food Type</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                <i class="ri-restaurant-line"></i><span>Food</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/food')}}">

                        <i class="bi bi-circle"></i><span>Dishes List</span>
                    </a>
                    <a href="{{asset('admin/food/create')}}">
                        <i class="bi bi-circle"></i><span>Add More Food</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav8" data-bs-toggle="collapse" href="#">
                <i class="ri-draft-fill"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav8" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/food_order')}}">
                        <i class="bi bi-circle"></i><span>Orders list</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav6" data-bs-toggle="collapse" href="#">
                <i class="ri-newspaper-fill"></i><span>News</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/news')}}">

                        <i class="bi bi-circle"></i><span>News List</span>
                    </a>
                    <a href="{{asset('admin/news/create')}}">
                        <i class="bi bi-circle"></i><span>Add News</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav7" data-bs-toggle="collapse" href="#">
                <i class="ri-gallery-fill"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav7" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/gallery')}}">

                        <i class="bi bi-circle"></i><span>Images List</span>
                    </a>
                    <a href="{{asset('admin/gallery/create')}}">
                        <i class="bi bi-circle"></i><span>Add More Photos</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav9" data-bs-toggle="collapse" href="#">
                <i class="ri-calendar-event-fill"></i><span>Event</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav9" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/event')}}">
                        <i class="bi bi-circle"></i><span>Events List</span>
                    </a>

                    <a href="{{asset('admin/event/create')}}">
                        <i class="bi bi-circle"></i><span>Add Events</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav10" data-bs-toggle="collapse" href="#">
                <i class="ri-calendar-event-fill"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav10" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/contact')}}">
                        <i class="bi bi-circle"></i><span>Contact List</span>
                    </a>

                </li>
            </ul>
        </li>

        <!-- End Components Nav -->

    </ul>

</aside><!-- End Sidebar-->


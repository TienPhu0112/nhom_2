<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-receipt"></i><span>Đơn đặt bàn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/order')}}">
                        <i class="bi bi-circle"></i><span>Danh Sách Đơn Đặt Bàn</span>
                    </a>

                    <a href="{{asset('admin/order/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Đơn Đặt Bàn</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav5" data-bs-toggle="collapse" href="#">

                <i class="ri-reserved-line"></i><span> Bàn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/table')}}">
                        <i class="bi bi-circle"></i><span>Danh Sách Bàn</span>
                    </a>

                    <a href="{{asset('admin/table/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Bàn</span>
                    </a>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-face"></i><span>Khách Hàng</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/customer')}}">

                        <i class="bi bi-circle"></i><span>Danh Sách Khách Hàng</span>
                    </a>
                    <a href="{{asset('admin/customer/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Khách Hàng</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-food-menu"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/type')}}">

                        <i class="bi bi-circle"></i><span>Dish Type</span>
                    </a>
                    <a href="{{asset('admin/food')}}">
                        <i class="bi bi-circle"></i><span>Food</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- End Components Nav -->

    </ul>

</aside><!-- End Sidebar-->


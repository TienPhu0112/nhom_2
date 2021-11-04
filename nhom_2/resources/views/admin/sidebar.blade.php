<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{asset('/home')}}">
                <i class="bx bxs-receipt"></i><span>Dashboard</span>
            </a>
        </li>

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
                <i class="bx bxs-food-menu"></i><span>Loại Đồ Ăn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/type')}}">

                        <i class="bi bi-circle"></i><span>Danh Sách Loại Đồ Ăn</span>
                    </a>
                    <a href="{{asset('admin/type/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Loại Đồ Ăn</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                <i class="ri-restaurant-line"></i><span>Món Ăn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/food')}}">

                        <i class="bi bi-circle"></i><span>Danh Sách Món Ăn</span>
                    </a>
                    <a href="{{asset('admin/food/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Món Ăn</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav6" data-bs-toggle="collapse" href="#">
                <i class="bx bx-news"></i><span>Tin Tức</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/news')}}">

                        <i class="bi bi-circle"></i><span>Danh Sách Tin Tức</span>
                    </a>
                    <a href="{{asset('admin/news/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Tin Tức</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav7" data-bs-toggle="collapse" href="#">
                <i class="bx bx-news"></i><span>Bộ Sưu Tập</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav7" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/gallery')}}">

                        <i class="bi bi-circle"></i><span>Danh Sách Hình Ảnh</span>
                    </a>
                    <a href="{{asset('admin/gallery/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Hình Ảnh</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- End Components Nav -->

    </ul>

</aside><!-- End Sidebar-->


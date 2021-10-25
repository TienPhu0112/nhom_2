<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Đơn đặt bàn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('admin/order')}}"></a>


                    <a href="#"></a>

                        <a href="{{asset('admin')}}">

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

                <i class="bi bi-menu-button-wide"></i><span> Bàn</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('table')}}">
                        <i class="bi bi-circle"></i><span>Danh Sách Bàn</span>
                    </a>
            </ul>
        </li>

                <i class="bi bi-menu-button-wide"></i><span>Khách hàng</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{asset('customer/create')}}">
                        <i class="bi bi-circle"></i><span>Thêm Khách Hàng</span>
                    </a>

                    <a href="{{asset('customer')}}">
                        <i class="bi bi-circle"></i><span>Danh Sách Khách Hàng</span>
                    </a>
            </ul>
        </li><!-- End Components Nav -->



    </ul>

</aside><!-- End Sidebar-->


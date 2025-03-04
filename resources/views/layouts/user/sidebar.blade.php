<aside class="main-sidebar sidebar-dark-primary">

    <!-- Sidebar -->
    <div class="sidebar">
        <div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-center mb-4">
                            {{-- <img src="/images/icons/logo-01.png" style="filter: brightness(0) invert(1);"> --}}
                        داشبورد کاربری
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                پروفایل کاربری 
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.profile') }}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ویرایش پروفایل</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-shopping-cart"></i>
                            <p>
                                مدیریت سفارشات
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.orders') }}" class="nav-link">
                                    <i class="fa fa-shopping-cart nav-icon"></i>
                                    <p>سفارشات</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.payments') }}" class="nav-link">
                                    <i class="fa fa-dollar nav-icon"></i>
                                    <p>پرداخت ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">خروج</button>
            </form>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
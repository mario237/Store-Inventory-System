<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/online-shop.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard') }}" class="d-block">{{ config('app.name') }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item d-flex">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                       <img class="sidebar-icon" src="{{ asset('admin/dist/img/categories.png') }}" alt="">
                        <p>
                            Categories
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link">
                        <img class="sidebar-icon" src="{{ asset('admin/dist/img/brand.png') }}" alt="">
                        <p>
                            Brands
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('sizes.index') }}" class="nav-link">
                        <img class="sidebar-icon" src="{{ asset('admin/dist/img/size.png') }}" alt="">
                        <p>
                            Sizes
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <img class="sidebar-icon" src="{{ asset('admin/dist/img/products.png') }}" alt="">
                        <p>
                            Products
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

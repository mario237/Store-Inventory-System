<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto align-items-center">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link" style="padding: 0.3rem 1rem;" data-toggle="dropdown" href="#">
                <img src="{{ asset('admin/dist/img/avatar5.png') }}" class="img-circle elevation-2"
                     style="width: 30px; height: 30px;" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link text-danger" data-widget="logout" role="button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span>Logout</span>

                        </a>
                    </form>
                </a>

            </div>
        </li>


    </ul>
</nav>
<!-- /.navbar -->

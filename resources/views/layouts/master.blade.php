<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    @include('layouts.partials._head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('admin/dist/img/online-shop.png') }}" alt="AdminLTELogo" height="60"
             width="60">
    </div>



    @include('layouts.partials._navbar')
    @include('layouts.partials._sidebar')


    <div class="content-wrapper">

        @yield('content')

    </div>


</div>


@include('layouts.partials._footer-script')

</body>
</html>

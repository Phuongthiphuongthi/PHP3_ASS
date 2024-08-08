<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    @include('layout.admin.partials.head')
</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('layout.admin.partials.header')
        </header>




        <!-- ========== App Menu ========== -->
        @include('layout.admin.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>


@yield('content')

    </div>
    <!-- END layout-wrapper -->

    <!-- END layout-wrapper -->
    {{-- @include('layout.admin.home.table1') --}}

@include('layout.admin.partials.footer')
    <!-- JAVASCRIPT -->
    @include('layout.admin.partials.js')
</body>

</html>

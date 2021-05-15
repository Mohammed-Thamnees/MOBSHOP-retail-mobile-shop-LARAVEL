<!doctype html>
<html lang="en">

    <head>
        @include('backend.layouts.head') 
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        
        <div id="layout-wrapper">

            @include('backend.layouts.header')

            <!-- Left Sidebar Start -->

            @include('backend.layouts.sidebar')

            <!-- Left Sidebar End -->

            <!-- Start main content -->

            @yield('content')

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- start footer area -->

        @include('backend.layouts.footer')
       
        <!-- end footer area -->

    </body>

</html>
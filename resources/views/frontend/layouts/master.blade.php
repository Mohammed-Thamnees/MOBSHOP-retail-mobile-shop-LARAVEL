<!doctype html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>
<body>
    <!-- Preloader 
    <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
-->

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')

</body>

</html>
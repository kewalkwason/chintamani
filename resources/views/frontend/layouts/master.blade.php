<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')
</head>

<body class="footer-parallax">
    @include('frontend.includes.header')
    <div id="content" class="gradiant-content">
        @yield('content')
    </div>
    @include('frontend.includes.footer')
    @include('frontend.includes.footer-js')
</body>

</html>
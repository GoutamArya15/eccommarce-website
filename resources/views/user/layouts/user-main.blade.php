@include('user.layouts.header')

<body>
    @yield('header')
    @yield('inside_section')
    @yield('footer')
    @include('user.layouts.footer')
    @yield('script')
</body>



</html>

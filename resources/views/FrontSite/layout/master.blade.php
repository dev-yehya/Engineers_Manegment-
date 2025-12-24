@include('FrontSite.layout.header')
@yield('content')
@include('FrontSite.layout.footer')
@if (@isset($js))
    <script src="{{ asset('frontsite/js/'.$js) }}"></script>
@endif
</body>
</html>


<!DOCTYPE html>
<html>

<head>
   @include('backend.components.head')
</head>

<body>
    <div class="total-content">
        @include('backend.components.sidebar')
        @yield('content')
        <div class="clearfix"></div>
    </div>
    @include('backend.components.footer')

</body>

</html>

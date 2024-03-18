<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('clients.partial.head')
</head>
<body>
   
        
        <!--  Header Start -->
        @include('clients.partial.header')

        @yield('content')
           
        @include('clients.partial.footer')
        @include('clients.partial.foot')
</body>
</html>
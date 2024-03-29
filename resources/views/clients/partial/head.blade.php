<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/vendor/simple-line-icons.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/fancy-box.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins/jqueryui.min.css')}}">
   
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="client/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="client/assets/js/plugins/plugins.min.js')}}"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
     <link rel="stylesheet" href="{{ asset('client/assets/css/style.css')}}"> 
    
    <link rel="stylesheet" href="{{ asset('client/assets/css/style.min.css')}}">
    @stack('css')
</meta>
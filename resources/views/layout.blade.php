<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food and Restorent One page Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('assets-1/css/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('assets-1/css/font-awesome.min.css')}}">
        <!--        <link rel="stylesheet" href="assets-1/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('assets-1/css/animate/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets-1/css/plugins.css')}}" />

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets-1/css/responsive.css')}}" />

         <!--Theme custom css -->
         <link rel="stylesheet" href="{{asset('assets-1/css/style.css')}}">

        <script src="{{asset('assets-1/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>

        @yield("header")
        @yield("content")
        @yield("footer")

        <script src="{{asset('assets-1/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets-1/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets-1/js/jquery-easing/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets-1/js/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets-1/js/plugins.js')}}"></script>
        <script src="{{asset('assets-1/js/main.js')}}"></script>
    </body>
</html>

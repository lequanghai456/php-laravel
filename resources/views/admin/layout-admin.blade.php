<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets-2/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets-2/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{$title}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('assets-2/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets-2/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets-2/demo/demo.css')}}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <style>
    .table-scroll{
        height:400px;
        width:100%;
    }
    .fa{
        font-size:20px;
    }
    .table-button{
        width:300px;
    }

    .form{
        display: inline-block;
        float: right;
    }
    .btn-primary{
        margin:0;
    }
    .flex-user{
        display:flex;
    }
    .text-left{
        text-align:center;
    }

    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
        padding: 20px 10px;
    }
    .avatar{
        border-radius: 50%;
    }
    .main-panel{
        background-color:white;
    }
    .flex-user button a, .card-header button a {
        color: white;
    }
    .flex-user button a:hover, .card-header button a:hover{
        text-decoration: none;
        color:black;
    }
    .table-button .btn a{
        color:white;
    }
 </style>

</head>

<body id="body" onload="check()" style="position:relative;">
  <div class="wrapper ">
  @yield("menu")
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a id="title" class=" navbar-brand" href="javascript:;">{{$title}}</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
            @yield("search")
        </div>
      </nav>
      <!-- End Navbar -->
        @yield("content")
      <footer class="footer footer-black  footer-white ">
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets-2/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets-2/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets-2/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-2/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets-2/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets-2/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets-2/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets-2/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
    function check(){
        var title = document.getElementById('title').innerHTML;
        switch(title){
            case "Dashboard":
                $(document).ready(function(){
                    $(".dashboard").addClass("active");
                });
                break;
            case "User Profile":
                $(document).ready(function(){
                    $(".userprofile").addClass("active");
                });
                break;
            case "Tables":
                $(document).ready(function(){
                    $(".tables").addClass("active");
                });
                break;
        }
    }
    $('.block').click(function(){
        var inner = document.getElementsByClassName("block").innerHTML;
        if(inner == "Active"){
            $(document).addClass("btn-info");
            $(document).removeClass("btn-warning");
        }
        else{
            $(document).removeClass("btn-info");
            $(document).addClass("btn-warning");
        }
    });
  </script>
</body>
</html>

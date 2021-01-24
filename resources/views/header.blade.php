<header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
								<a href=""><i class="fa fa-envelope"></i>abcxyz@gmail.com</a>
								<a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
							</div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="assets-1/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{ route('Index.index') }}">Trang Chủ</a></li>
                                        <li><a href="#abouts">Menu</a></li>
                                        @if(Auth::guard('user')->check()==false)
                                            @if(!isset($title))
                                            <li><a href="{{route('Login.get')}}">Đăng Nhập</a></li>
                                            @endif
                                        <li><a href="{{route('TableDangKy.create')}}">Đăng Ký</a></li>
                                        @else
                                        <li class="nav-item btn-rotate dropdown">
                                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{Auth::guard('user')->user()->ho_ten}}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" style="width: 100%; min-width: 0px; text-align: center;border: 1px solid black; " aria-labelledby="navbarDropdownMenuLink">
                                            @if(Auth::guard('user')->user()->phan_quyen)
                                                <a class="dropdown-item nav-link"  href="{{route('Dashboard.index')}}">Quản Lý</a>
                                                <br>
                                                @endif
                                                <a class="dropdown-item nav-link"  href="{{route('Logout')}}">Đăng Xuất</a>
                                            </div>
                                        </li>
                                        @endif
                                        <!-- <li>
                                            <a style="padding:0 10px;" href="#profile">
                                                <img style="width:50px" class="img-circle" src="assets-2/img/faces/ayo-ogunseinde-2.jpg" alt="">
                                                <span>abc</span>
                                             </a>
                                        </li> -->
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- End Header Section -->

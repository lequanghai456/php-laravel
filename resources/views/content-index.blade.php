<section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>Food Restaurant</h1>
                                    <p>{{$gt}}</p>
                                    <button href="" class="btn-lg">Xem chi tiết</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-6">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <img src="assets-1/images/ab.png" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                                <h4>Về nhà hàng</h4>
                                <h3>Đảm bảo quý khách ngon miệng là quan trọng nhất</h3>
                                <p>Được thiết kế hiện đại, mang vẻ đẹp trang nhã ấm cúng, với hơn 100 món ăn chọn lọc từ các món truyền thống việt nam và những món ngon châu á , được bếp trưởng sáng tạo thành những món ăn , mang lại trải nghiệm ẩm thực khác lạ</p>
                                <p>Với hệ thống bể chứa hải sản tự nhiên luôn giúp hải sản tại ẩm thực việt được bảo quản trong bể kính và giữ được sự tươi ngon đảm bảo hương vị tuyệt vời nhất cho món ăn cũng như khi chế biến</p>
                                <a href="" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="main_features_content text-left">
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h4>Công thức nấu ăn đặt biệt</h4>
                                            <h3>Hương vị quý giá</h3>
                                            <p>Được thiết kế hiện đại, mang vẻ đẹp trang nhã ấm cúng, với hơn 100 món ăn chọn lọc từ các món truyền thống việt nam và những món ngon châu á , được bếp trưởng sáng tạo thành những món ăn , mang lại trải nghiệm ẩm thực khác lạ</p>
                                            <p>Với hệ thống bể chứa hải sản tự nhiên luôn giúp hải sản tại ẩm thực việt được bảo quản trong bể kính và giữ được sự tươi ngon đảm bảo hương vị tuyệt vời nhất cho món ăn cũng như khi chế biến</p>
                                            <a href="" class="btn btn-primary">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>Thú vị</h4>
                                <h3>Kinh nghiệm</h3>
                            </div>

                            <div class="main_portfolio_content">
                                @foreach($monan as $a)
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets-1/images/{{$a['hinh_anh']}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>{{$a['ten_mon_an']}}</h6>
                                        <p class="product_price">{{$a['gia']}}&#8363;</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ourPakeg" class="ourPakeg">
            <div class="container">
                <div class="main_pakeg_content">
                    <div class="row">
                        <div class="head_title text-center">
                            <h4>Tuyệt vời</h4>
                            <h3>Ngon miệng</h3>
                        </div>

                        <div class="single_pakeg_one text-right wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Thức uống</h4>
                                    </div>

                                    <ul>
                                        <li> Thức uống 1........................................................100000&#8363; </li>
                                        <li> Thức uống 2........................................................100000&#8363; </li>
                                        <li> Thức uống 3........................................................100000&#8363; </li>
                                        <li> Thức uống 4........................................................100000&#8363; </li>
                                        <li> Thức uống 5........................................................100000&#8363; </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_two text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Thức ăn chính </h4>
                                    </div>

                                    <ul>
                                        <li> Thức ăn 1........................................................500000&#8363; </li>
                                        <li> Thức ăn 2........................................................500000&#8363; </li>
                                        <li> Thức ăn 3........................................................500000&#8363; </li>
                                        <li> Thức ăn 4........................................................500000&#8363; </li>
                                        <li> Thức ăn 5........................................................500000&#8363; </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_three text-left wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Tráng miệng</h4>
                                    </div>

                                    <ul>
                                        <li> Tráng miệng 1........................................................50000&#8363;</li>
                                        <li> Tráng miệng 2........................................................50000&#8363;</li>
                                        <li> Tráng miệng 3........................................................50000&#8363;</li>
                                        <li> Tráng miệng 4........................................................50000&#8363;</li>
                                        <li> Tráng miệng 5........................................................50000&#8363;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mobaileapps" class="mobailapps">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_mobail_apps_content wow zoomIn">
                            <div class="col-md-5 col-sm-12 text-center">
                                <img src="assets-1/images/iphone.png" alt="" />
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="single_monail_apps_text">
                                    <h4> Bạn có thể cài đặt ứng dụng </h4>
                                    <h1> Ứng dụng di dộng <span>đã có trên mọi nền tảng</span></h1>

                                    <a href=""><img src="assets-1/images/google.png" alt="" /></a>
                                    <a href=""><img src="assets-1/images/apps.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3>Liên hệ</h3>

                                <div class="single_widget_info">
                                    <p>
                                        <span>Địa chỉ: 65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, TP.HCM</span>
                                        <span class="phone_email">Phone: 061 9876 5432</span>
                                        <span class="phone_email">Phone: 061 9876 5432</span>
                                        <span class="phone_email">Email: abcxyz@gmail.com</span></p>
                                </div>

                                <div class="footer_socail_icon">
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

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="4s">
                                <h3>Thời gian mở cửa</h3>

                                <div class="single_widget_info">
                                    <p><span class="date_day">Thứ 2 - Thứ 6</span>
                                        <span>8:00am to 10:00pm</span>
                                        <span>11:00am to 10:00pm</span>

                                        <span class="date_day">Thứ 7 - Chủ nhật</span>
                                        <span>10:00am to 11:00pm<span>
                                        <span>10:00am to 11:00pm<span>
                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="5s">
                                <h3>Gửi ý kiến trực tiếp</h3>

                                <div class="single_widget_form text-left">
                                    <form action="#" id="formid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Họ Ten" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Vấn đề">
                                        </div> <!-- end of form-group -->

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Tin nhắn"></textarea>
                                        </div>

                                        <input type="submit" value="Gửi" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

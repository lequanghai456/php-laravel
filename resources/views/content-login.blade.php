
<section id="footer_widget" class="footer_widget ">
            <div class="container background-section">
                <br/><br/><br/><br/>
                <br/><br/><br/>
                <div class="row">
                    <div class="footer_widget_content">
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="4s">

                            <form action="{{route('Login.post')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group text-center">
                                    <h1>Đăng Nhập</h1>
                                    <br/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tài khoản </label>
                                    <input type="text" name="taikhoan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tài khoản">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mât khẩu</label>
                                    <input style="margin:0;" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                                </div>
                                @if (session('status'))
                                <div class="alert alert-sucess" style ="color:red;">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="form-check">
                                    <input type="checkbox" name="remember"  class="form-check-input" id="exampleCheck">
                                    <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                                </div>
                                <br/>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn text-center btn-primary">Đăng Nhập</button>
                                </div>
                                <div class="form-group text-center">
                                <br/>
                                   <span>Tạo tài khoản mới ?</span>
                                   <span><a href="#">Đăng ký</a></span>
                                </div>
                                {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4">
                        </div>

                    </div>
                </div>
                <br/><br/>
            </div>
        </section>


<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Đăng ký thành viên";
?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Đăng ký thành viên</h4>
                </div>
            </div>

        <form action="{{route('TableDangKy.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="TongTien">Tài khoản</label>
                <input type="text" class="form-control" id="TaiKhoan" name="TaiKhoan">
            </div>
        	<div class="form-group">
                <label for="TongTien">Mật khẩu</label>
                <input type="password" class="form-control" id="MatKhau" name="MatKhau">
            </div>
            <div class="form-group">
                <label for="TongTien">Họ và tên</label>
                <input type="text" class="form-control" id="HoTen" name="HoTen">
            </div>
            <div class="form-group">
                <label for="TongTien">Số điện thoại</label>
                <input type="text" class="form-control" id="SDT" name="SDT">
            </div>
            <div class="form-group">
                <label for="TongTien">Địa chỉ</label>
                <input type="text" class="form-control" id="DiaChi" name="DiaChi">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>


<div class="content">
    <div class="row">
            <!--=========Start Content===============-->
            <!--User-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">User</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;" class="btn btn-primary"><a href="#">Create</a></button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-scroll">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="">
                        </th>
                        <th>
                            Tài Khoản
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                            Họ Tên
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Phân quyền
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsuser as $user)
                        <tr>
                        <td >
                            <div class="flex-user">
                            <button class="btn btn-success">Update</button>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-warning">Block</button></div>
                            </td>
                            <td class="text-left">
                                {{$user['tai_khoan']}}
                            </td>
                            <td class="text-left">
                                {{$user['password']}}
                            </td>
                            <td class="text-left">
                                {{$user['ho_ten']}}
                            </td>
                            <td class="text-left">
                                {{$user['sdt']}}
                            </td>
                            <td class="text-left text-address">
                                {{$user['dia_chi']}}
                            </td>
                            <td class="text-left">
                                <?php if($user['phan_quyen'] == true) echo "Admin"; else echo "User"; ?>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <!--Loại bàn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title"> Loại bàn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên loại
                        </th>
                        <th>
                            Số lượng ghế
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsloaiban as $lb)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$lb['ten_loai']}}
                            </td>
                            <td class="text-left">
                            {{$lb['so_luong_ghe']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Bàn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Bàn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                        </th>
                        <th>
                            Số bàn
                        </th>
                        <th>
                            Loại bàn
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsban as $b)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$b['so']}}
                            </td>
                            <td class="text-left">
                                {{$b->FindLoaiBan($b['id_loai_ban'])->ten_loai}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Loại món ăn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title"> Loại món ăn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên loại
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsloaimonan as $lma)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$lma['ten_loai']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Món ăn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title"> Món ăn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên món ăn
                        </th>
                        <th>
                            Hình ảnh
                        </th>
                        <th>
                            Mô tả
                        </th>
                        <th>
                            Giá
                        </th>
                        <th>
                            Loại món ăn
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsmonan as $ma)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$ma['ten_mon_an']}}
                            </td>
                            <td class="text-left">
                                {{$ma['hinh_anh']}}
                            </td>
                            <td class="text-left">
                                {{$ma['mo_ta']}}
                            </td>
                            <td class="text-left">
                                {{$ma['gia']}}
                            </td>
                            <td class="text-left">
                                {{$ma->FindLoaiMonAn($ma['id_loai_mon_an'])->ten_loai}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Hoá đơn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Hoá đơn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tổng tiền
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dshoadon as $hd)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                                {{$hd['tong_tien']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Chi tiết hoá đơn-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Chi tiết hoá đơn</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            ID hoá đơn
                        </th>
                        <th>
                            Tên món ăn
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Giá
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dscthoadon as $dsct)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                                {{$dsct['id_hoa_don']}}
                            </td>
                            <td class="text-left">
                                {{$dsct->FindMonAn($dsct['id_mon_an'])->ten_mon_an}}
                            </td>
                            <td class="text-left">
                                {{$dsct['so_luong']}}
                            </td>
                            <td class="text-left">
                                {{$dsct['don_gia']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Nguyên liệu-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Nguyên liệu</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nguyên liệu
                        </th>
                        <th>
                            Đơn giá
                        </th>
                        <th>
                            Tình trạng
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsnguyenlieu as $nl)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$nl['ten']}}
                            </td>
                            <td class="text-left">
                                {{$nl['don_gia']}}
                            </td>
                            <td class="text-left">
                                {{$nl['tinh_trang']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Nhà cung cấp-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Nhà cung cấp</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nhà cung cấp
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Tình trạng
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsnhacungcap as $ncc)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                                {{$ncc['ten']}}
                            </td>
                            <td class="text-left">
                                {{$ncc['sdt']}}
                            </td>
                            <td class="text-left">
                                {{$ncc['dia_chi']}}
                            </td>
                            <td class="text-left">
                                {{$ncc['tinh_trang']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Hoá đơn nhập-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Hoá đơn nhập</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nhà cung cấp
                        </th>
                        <th>
                            Tổng tiền
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dshoadonnhap as $dshdn)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                            {{$dshdn["id_nha_cung_cap"]}}
                            </td>
                            <td class="text-left">
                            Dakota Rice
                            </td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            <!--Chi tiết hoá đơn nhập-->
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Chi tiết hoá đơn nhập</h4>
                </div>
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height:300px;">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nguyên liệu
                        </th>
                        <th>
                            Tên nhà cung cấp
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Giá
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dscthoadonnhap as $cthdn)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                            {{$cthdn->FindNguyenLieu($cthdn['id_nguyen_lieu'])->ten}}
                            </td>
                            <td class="text-left">
                            {{$cthdn->FindNhaCungCap($cthdn->FindHoaDonNhap($cthdn['id_hoa_don_nhap'])->id)->ten}}
                            </td>
                            <td class="text-left">
                            {{$cthdn['so_luong']}}
                            </td>
                            <td class="text-left">
                            {{$cthdn['don_gia']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <!--=========End Content===============-->
    </div>
</div>

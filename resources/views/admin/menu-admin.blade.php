<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo" style="padding:11px 0px;">
        <a href="https://www.creative-tim.com" class="logo-mini">
          <div class="logo-image-small">
            <img src="assets-2/img/mike.jpg" class="avatar" ">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="logo-normal">
        {{Auth::guard('user')->user()->ho_ten}}
          <!-- <div class="logo-image-big">
            <img src="assets-2/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="dashboard">
            <a href="{{ route('Dashboard.index') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="userprofile">
            <a href="{{route('UserAdmin.index')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="tables">
              <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="nc-icon nc-tile-56"></i>Table </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li> <a href="{{route('TableUser.index')}}"><i class="fa fa-angle-right"></i>User</a></li>
                <li> <a href="{{route('TableBan.index')}}"><i class="fa fa-angle-right"></i>Bàn</a></li>
                <li> <a href="{{route('TableLoaiMonAn.index')}}"><i class="fa fa-angle-right"></i>Loại món ăn</a></li>
                <li> <a href="{{route('TableMonAn.index')}}"><i class="fa fa-angle-right"></i>Món ăn</a></li>
                <li> <a href="{{route('TableHoaDon.index')}}"><i class="fa fa-angle-right"></i>Hoá đơn</a></li>
                <!-- <li> <a href="{{route('TableChiTietHoaDon.index')}}"><i class="fa fa-angle-right"></i>Chi tiết hoá đơn</a></li> -->
                <li> <a href="{{route('TableNguyenLieu.index')}}"><i class="fa fa-angle-right"></i>Nguyên liệu</a></li>
                <li> <a href="{{route('TableNhaCungCap.index')}}"><i class="fa fa-angle-right"></i>Nhà cung cấp</a></li>
                <li> <a href="{{route('TableHoaDonNhap.index')}}"><i class="fa fa-angle-right"></i>Hoá đơn nhập</a></li>
                <!-- <li> <a href="{{route('TableChiTietHoaDonNhap.index')}}"><i class="fa fa-angle-right"></i>Chi tiết hoá đơn nhập</a></li> -->
              </ul>
            </a>
          </li>
        </ul>
      </div>
    </div>

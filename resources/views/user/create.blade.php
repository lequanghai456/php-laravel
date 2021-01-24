<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table User";
?>
@extends("admin.layout-admin")
@section("menu")
    @include("admin.menu-admin")
@endsection
@section("search")
    @include("admin.search-admin")
@endsection
@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Thêm User</h4>
                </div>
            </div>
        <ul class="alert text-danger">
            @foreach($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <form action="{{route('TableUser.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="taikhoan">Tài khoản</label>
                <input type="text" class="form-control" id="taikhoan" name="taikhoan">

            </div>
            <div class="form-group">
                <label for="usr">Mật khẩu</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <div class="form-group">
                <label for="usr">Họ Tên</label>
                <input type="text" class="form-control" id="" name="hoten">
            </div>
            <div class="form-group">
                <label for="usr">Số điện thoại</label>
                <input type="text" class="form-control" id="" name="sodienthoai">
            </div>
            <div class="form-group">
                <label for="usr">Địa chỉ</label>
                <input type="text" class="form-control" id="" name="diachi">
            </div>
            <div class="form-group">
                <label for="sel1">Phân Quyền</label>
                <select class="form-control" id="sel1" name="phanquyen">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>

        </div>
    </div>
</div>

@endsection

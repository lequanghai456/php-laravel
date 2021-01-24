<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Nhà Cung Cấp";
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
                    <h4 style="display:inline;" class="card-title">Thêm Nhà Cung Cấp</h4>
                </div>
            </div>

        <form action="{{route('TableNhaCungCap.update',$id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="form-group">
                <label for="tenloaimonan">Tên nhà cung cấp</label>
                <input type="text" class="form-control" value="{{$ten}}" name="ten" id="tenloaimonan">
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Địa chỉ</label>
                <input type="text" class="form-control" name="diachi" value="{{$dia_chi}}" id="tenloaimonan">
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Số điện thoại</label>
                <input type="text" class="form-control" value="{{$sdt}}" name="sodienthoai" id="tenloaimonan" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

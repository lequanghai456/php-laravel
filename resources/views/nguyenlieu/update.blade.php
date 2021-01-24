<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Nguyen Lieu";
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
                    <h4 style="display:inline;" class="card-title">Thêm nguyên liệu</h4>
                </div>
            </div>

        <form action="{{route('TableNguyenLieu.update',$id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="usr">Tên nguyên liệu</label>
                <input type="text" class="form-control" id="" value="{{$ten}}" name="tennguyenlieu">
            </div>
            <div class="form-group">
                <label for="usr">Đơn giá</label>
                <input type="number" min="0" class="form-control" value="{{$don_gia}}" name="gia" >
            </div>
            <div class="form-group">
                <label for="usr">Tình trạng</label>
                <input type="text" class="form-control" value="{{$tinh_trang}}" name="tinhtrang">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

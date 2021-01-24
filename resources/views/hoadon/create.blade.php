<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Hoá Đơn";
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
                    <h4 style="display:inline;" class="card-title">Thêm hoá đơn </h4>
                </div>
            </div>

        <form action="{{route('TableHoaDon.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="TongTien">Tổng tiền</label>
                <input type="text" class="form-control" id="TongTien" name="TongTienHoaDon">
            </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
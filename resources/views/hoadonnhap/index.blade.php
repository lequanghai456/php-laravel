<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Hoá Đơn Nhập";
?>
@extends("admin.layout-admin")
@section("menu")
    @include("admin.menu-admin")
@endsection
@section("search")
    @include("admin.search-admin")
@endsection
@section("content")
    @include("hoadonnhap.content")
@endsection

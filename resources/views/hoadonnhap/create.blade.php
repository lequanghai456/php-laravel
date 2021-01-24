<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table hoá đơn nhập";
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
                    <h4 style="display:inline;" class="card-title">Thêm nhà cung cấp </h4>
                </div>
            </div>

        <form action="{{route('TableHoaDonNhap.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tenloaimonan">Nhà cung cấp</label>
                <select name="Id_Nha_Cung_Cap">
                    @<?php foreach ($data as $NCC): ?>
                    <option value="{{$NCC['id']}}">{{$NCC['ten']}}</option>
                    <?php endforeach ?>
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

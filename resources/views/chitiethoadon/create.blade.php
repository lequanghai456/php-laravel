<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table chi tiết hoá đơn";
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
                    <h4 style="display:inline;" class="card-title">Thêm Loại Bàn </h4>
                </div>
            </div>

        <form action="{{route('TableChiTietHoaDon.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="HoaDon">Hoá đơn số</label>
                <select name="Id_Hoa_Don">
                    @foreach($dscthoadon as $TenMonAn)
                        <option value="{{$TenMonAn->id_hoa_don}}">
                            {{$TenMonAn->id_hoa_don}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Tên món ăn</label>
                <select name="Id_Mon_An">
                    @foreach($dscthoadon as $TenMonAn)
                        <option value="{{$TenMonAn->id_mon_an}}">
                            {{$TenMonAn->FindMonAn($TenMonAn['id_mon_an'])->ten_mon_an}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Số lượng</label>
                <input type="text" class="form-control" id="So_Luong" name="So_Luong">
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Đơn giá</label>
                <input type="text" class="form-control" id="don_gia" name="Don_Gia">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
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
                    <h4 style="display:inline;" class="card-title">Sửa Loại Món Ăn</h4>
                </div>
            </div>

        <form action="{{route('TableLoaiMonAn.update',$id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="usr">Tên loại món ăn</label>
                <input type="text" class="form-control" id="" value="{{$ten_loai}}" name="tenloai" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

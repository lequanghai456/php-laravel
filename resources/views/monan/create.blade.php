<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Món Ăn";
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
                    <h4 style="display:inline;" class="card-title">Thêm Món Ăn</h4>
                </div>
            </div>

        <form action="{{route('TableMonAn.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Tên món ăn</label>
                <input type="text" class="form-control" name="tenmonan">
            </div>
            <div class="form-group">
                <label >Giá</label>
                <input type="number" min="0" class="form-control"  name="gia">
            </div>
            <div class="form-group">
                <label >Mô tả</label>
                <input type="text" class="form-control"  name="mota">
            </div>
            <div class="custom-file">
                <input accept="*.png|*.jpg|*.jpep" type="file" name="hinhanh" class="custom-file-input" id="hinhanh" />
                <label class="custom-file-label" for="hinhanh">Chọn hình</label>
            </div>
            <div class="form-group">
                <img style="max-width: 200px;" id="imgPre" src="../assets-2/img/Noimg.png" alt="Alternate Text" class="img-thumbnail" />
            </div>
            <div class="form-group">
                <label for="sel1">Loại món ăn</label>
                <select class="form-control" id="sel1" name="loaimonan">
                <?php $loai = App\LoaiMonAn::all() ?>
                @foreach($loai as $i)
                    <option value="{{$i['id']}}">{{$i['ten_loai']}}</option>
                @endforeach                
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    function readURL(input, idImg) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(idImg).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#hinhanh").change(function(){
        readURL(this, '#imgPre');
    })
</script>
@endsection


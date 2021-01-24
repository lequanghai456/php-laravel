<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Mon An";
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
                    <h4 style="display:inline;" class="card-title">Sửa món ăn</h4>
                </div>
            </div>

        <form action="{{route('TableMonAn.update',$monan->id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="usr">Tên món ăn</label>
                <input type="text" class="form-control" id="" value="{{$monan->ten_mon_an}}" name="tenmonan">
            </div>
            <div class="form-group">
                <label for="usr">Giá</label>
                <input type="number" min="0" class="form-control" value="{{$monan->gia}}" name="gia" >
            </div>
            <div class="form-group">
                <label for="usr">Mô tả</label>
                <textarea type="text" class="form-control" name="mota">{{$monan->mo_ta}}</textarea>
            </div>
            <div class="custom-file">
                <input accept="*.png|*.jpg|*.jpep" type="file" name="hinhanh" class="custom-file-input" id="hinhanh" />
                <label class="custom-file-label" for="hinhanh">Chọn hình</label>
            </div>
            <div class="form-group text-left">
                <img id="imgPre" style="max-width: 200px;" src="{{asset('assets-2/img/'.$monan->hinh_anh)}}">
            </div>
            
            <div class="form-group">
                <label for="usr">Loại Món Ăn</label>
                <select class="form-control" id="sel1" name="loaimonan">
                    @foreach($dsloaimonan as $lma)
                        @if($loaimonanhientai->id == $lma->id)
                            <option value="{{$lma->id}}" selected >{{$lma->ten_loai}}</option>
                        @endif
                        @if($loaimonanhientai->id != $lma->id )
                            <option value="{{$lma->id}}" >{{$lma->ten_loai}}</option>
                        @endif
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

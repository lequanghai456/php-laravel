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
                    <h4 style="display:inline;" class="card-title">Xoá Món Ăn</h4>
                </div>
            </div>
        <form action="{{route('TableMonAn.destroy',$datamonan->id)}}" method="post" enctype="multipart/form-data">
         @method('DELETE')
         @csrf
         <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Tên món ăn
                        </th>
                        <th>
                            Hình ảnh
                        </th>
                        <th>
                            Mô tả
                        </th>
                        <th>
                            Giá
                        </th>
                        <th>
                            Loại món ăn
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                        <td class="text-left">
                            {{$datamonan->ten_mon_an}}
                            </td>
                            <td class="text-left">
                                <img style="max-width: 200px;" src="{{asset('assets-2/img/'.$datamonan->hinh_anh)}}">
                            </td>
                            <td class="text-left">
                                {{$datamonan->mo_ta}}
                            </td>
                            <td class="text-left">
                                {{$datamonan->gia}}
                            </td>
                            <td class="text-left">
                                {{$dataloaimonan->ten_loai}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                <input type="submit" class="btn btn-danger" id="" value="Xoá">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

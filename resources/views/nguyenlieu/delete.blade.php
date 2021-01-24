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
                    <h4 style="display:inline;" class="card-title">Xoá User</h4>
                </div>
            </div>
        <form action="{{route('TableNguyenLieu.destroy',$id)}}" method="post" enctype="multipart/form-data">
         @method('DELETE')
         @csrf
         <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Tên Nguyên Liệu 
                        </th>
                        <th>
                            Đơn giá
                        </th>
                        <th>
                            Tình Trạng
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">
                                {{$ten}}
                            </td>
                            <td class="text-left">
                                {{$don_gia}}
                            </td>
                            <td class="text-left">
                                {{$tinh_trang}}
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

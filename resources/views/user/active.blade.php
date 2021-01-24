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
                    <h4 style="display:inline;" class="card-title"><?php if($khoa == true) echo "Mở Khoá User"; else echo "Khoá User"; ?></h4>
                </div>
            </div>
        <form action="{{route('TableUser.active',$id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Tài Khoản
                        </th>
                        <th>
                            Họ Tên
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Phân quyền
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">
                                {{$tai_khoan}}
                            </td>
                            <td class="text-left">
                                {{$ho_ten}}
                            </td>
                            <td class="text-left">
                                {{$sdt}}
                            </td>
                            <td class="text-left">
                                {{$dia_chi}}
                            </td>
                            <td class="text-left">
                                <?php if($phan_quyen == true) echo "Admin"; else echo "User"; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                <input type="submit" class="btn btn-danger" id="" value="<?php if($khoa == true) echo "Mở khoá"; else echo "Khoá"; ?>">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

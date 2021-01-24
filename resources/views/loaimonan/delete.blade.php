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
                    <h4 style="display:inline;" class="card-title">Xoá loại món ăn</h4>
                </div>
            </div>

                                @if (session('msg'))
                                <div class="alert alert-sucess" style ="color:red;">
                                    {{ session('msg') }}
                                </div>
                            @endif
        <form action="{{route('TableLoaiMonAn.destroy',$id)}}" method="post" enctype="multipart/form-data">
         @method('DELETE')
         @csrf
         <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Tên loại món ăn
                        </th>
                        <th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">
                                {{$ten_loai}}
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

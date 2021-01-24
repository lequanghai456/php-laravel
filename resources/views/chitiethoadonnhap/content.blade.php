<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <a href="{{route('TableChiTietHoaDonNhap.create')}}"><button style="float:left;"  class="btn btn-primary">Create</button></a>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nguyên liệu
                        </th>
                        <th>
                            Tên nhà cung cấp
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Giá
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dscthoadonnhap as $cthdn)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                            {{$cthdn->FindNguyenLieu($cthdn['id_nguyen_lieu'])->ten}}
                            </td>
                            <td class="text-left">
                            {{$cthdn->FindNhaCungCap($cthdn->FindHoaDonNhap($cthdn['id_hoa_don_nhap'])->id)->ten}}
                            </td>
                            <td class="text-left">
                            {{$cthdn['so_luong']}}
                            </td>
                            <td class="text-left">
                            {{$cthdn['don_gia']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $dscthoadonnhap->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

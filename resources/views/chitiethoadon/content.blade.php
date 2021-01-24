<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <a href="{{route('TableChiTietHoaDon.create')}}"><button style="float:left;"  class="btn btn-primary">Create</button></a>
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
                            ID hoá đơn
                        </th>
                        <th>
                            Tên món ăn
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Giá
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dscthoadon as $dsct)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                                {{$dsct['id_hoa_don']}}
                            </td>
                            <td class="text-left">
                                {{$dsct->FindMonAn($dsct['id_mon_an'])->ten_mon_an}}
                            </td>
                            <td class="text-left">
                                {{$dsct['so_luong']}}
                            </td>
                            <td class="text-left">
                                {{$dsct['don_gia']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $dshoadon->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

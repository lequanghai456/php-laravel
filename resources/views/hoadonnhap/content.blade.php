<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <a href="{{route('TableHoaDonNhap.create')}}"><button style="float:left;"  class="btn btn-primary">Create</button></a>
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
                            Tên nhà cung cấp
                        </th>
                        </thead>
                        <tbody>
                        @foreach($dshoadonnhap as $dshdn)
                        <tr>
                        <td class="">
                                <button class="btn btn-warning">Chi tiết</button>
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                            {{$dshdn->FindNhaCungCap($dshdn["id_nha_cung_cap"])->ten}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $dshoadonnhap->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

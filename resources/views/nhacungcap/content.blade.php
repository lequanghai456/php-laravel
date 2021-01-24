<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary"><a href="{{route('TableNhaCungCap.create')}}">Create</a></button>
                    
                    <!-- search -->
                    <form class="form" action="{{route('TableNhaCungCapsearch')}}" method="get" >
                        <div class="input-group no-border">
                            <input type="text" name="search" class="form-control" placeholder="Search...">
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
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsnhacungcap as $ncc)
                        <tr>
                        <td class="table-button">
                            <button class="btn btn-success"><a href="{{route('TableNhaCungCap.edit',$ncc->id)}}">Update</a></button>
                            <button class="btn btn-danger"><a href="{{route('TableNhaCungCap.show',$ncc->id)}}">Delete</a></button>
                            </td>
                            <td class="text-left">
                                {{$ncc['ten']}}
                            </td>
                            <td class="text-left">
                                {{$ncc['sdt']}}
                            </td>
                            <td class="text-left">
                                {{$ncc['dia_chi']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $dsnhacungcap->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary"><a href="{{route('TableLoaiMonAn.create')}}">Create</a></button>
                    <form class="form" action="{{route('TableLoaiMonAn.search')}}">
                        <div class="input-group no-border">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div >
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên loại
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsloaimonan as $lma)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success"><a href="{{route('TableLoaiMonAn.edit',$lma->id)}}">Update</a></button>
                                <button class="btn btn-danger"><a href="{{route('TableLoaiMonAn.show',$lma->id)}}">Delete</a></button>
                            </td>
                            <td class="text-left">
                            {{$lma['ten_loai']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $dsloaimonan->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

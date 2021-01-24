<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                <button style="float:left;"  class="btn btn-primary"><a href="{{route('TableMonAn.create')}}">Create</a></button>
                    <form class="form" action="{{route('TableMonAn.search')}}">
                        <div class="input-group no-border">
                            <input name="search" type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="">
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
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
                            @foreach($dsmonan as $ma)
                        <tr>
                        <td class="flex-user">
                        <button style="float:left;" class="btn btn-success"><a href="{{route('TableMonAn.edit',$ma->id)}}">Update</a></button>
                        <button style="float:left;" class="btn btn-danger"><a href="{{route('TableMonAn.show',$ma->id)}}">Delete</a></button>
                        </td>
                            <td class="text-left">
                            {{$ma['ten_mon_an']}}
                            </td>
                            <td class="text-left">
                                <img style="max-width: 200px;" src="{{asset('assets-2/img/'.$ma['hinh_anh'])}}">
                                
                            </td>
                            <td class="text-left">
                                {{$ma['mo_ta']}}
                            </td>
                            <td class="text-left">
                                {{$ma['gia']}}
                            </td>
                            <td class="text-left">
                                {{$ma->FindLoaiMonAn($ma->id_loai_mon_an)['ten_loai']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        
                    </table>
                    {!! $dsmonan->links()!!}
                    </div>
                </div>
            </div>
          </div>
</div>

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <!-- <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                            </div>
                        </div>
                    </form> -->
                </div>
                <div class="card-body">
                    <div class="">
                    <table class="table">
                        <thead class=" text-primary">
                        <th >
                        </th>
                        <th>
                            Tổng tiền
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dshoadon as $hd)
                        <tr>
                        <td class=>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            <td class="text-left">
                                {{$hd['tong_tien']}}
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

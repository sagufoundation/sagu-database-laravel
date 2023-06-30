<!-- Left sidebar -->
<div class="inbox-leftbar">
    @if(Auth::user()->hasRole(['administrator','author']))
        <a href="{{ url('dasbor/berita/create') }}" class="btn btn-primary shadow d-block mb-2 waves-effect waves-light">
            <i class="mdi mdi-plus-box me-2"></i> Tambah
        </a>
    @endif
        <ul class="list-group">
                <a href="{{ url('dasbor/berita') }}" class="list-group-item list-group-item-action @if(request()->segment(3) == '') active @endif">
                        <i class="dripicons-star mr-1"></i> Publish <span class="badge badge-soft-info float-right ms-2 @if(request()->segment(3) == '') text-light @endif">{{$datapublish}}</span>
                </a>
                <a href="{{ url('dasbor/berita/draft') }}" class="list-group-item list-group-item-action @if(request()->segment(3) == 'draft') active @endif">
                        <i class="dripicons-document mr-1"></i> Draft<span class="badge badge-soft-info float-right ms-2 @if(request()->segment(3) == 'draft') text-light @endif">{{$jumlahdraft}}</span>
                </a>
                <a href="{{ url('dasbor/berita/trash') }}" class="list-group-item list-group-item-action">
                        <i class="dripicons-trash mr-1"></i> Trash <span class="badge badge-soft-info float-right ms-2">{{$jumlahtrash}}</span>
                </a>
        </ul>

</div>
<!-- End Left sidebar -->

<!-- Left sidebar -->
<div class="inbox-leftbar">

        <ul class="list-group">
                <a href="{{ url('dasbor/pesan') }}" class="list-group-item list-group-item-action">
                        <i class="dripicons-star mr-1"></i> Pesan Masuk <span class="badge badge-soft-info float-right ms-2">{{$datapublish}}</span>
                </a>

                <a href="{{ url('dasbor/pesan/trash') }}" class="list-group-item list-group-item-action">
                        <i class="dripicons-trash mr-1"></i> Trash <span class="badge badge-soft-info float-right ms-2">{{$jumlahtrash}}</span>
                </a>
        </ul>

</div>
<!-- End Left sidebar -->

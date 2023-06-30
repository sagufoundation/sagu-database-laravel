       <!-- Left sidebar -->
       <div class="inbox-leftbar">
        <div class="mail-list mt-2">
        <a href="{{ url('app/pengajuan') }}"><i class="dripicons-star me-2"></i>Data<span class="badge badge-soft-info float-end ms-2">{{$datapublish}}</span></a>

            <a href="{{ url('/app/pengajuan/trash') }}"><i class="dripicons-trash me-2"></i>Trash <span class="badge badge-soft-info float-end ms-2">{{$jumlahtrash}}</span></a>
        </div>
    </div>
    <!-- End Left sidebar -->

       <!-- Left sidebar -->
       <div class="inbox-leftbar">

<a href="{{ url('dasbor/siswa/create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2"><i class="mdi mdi-plus-circle me-2"></i> Tambah data</a>

    <div class="list-group">
        <a href="{{ url('dasbor/siswa') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == '') active @endif"><i class="dripicons-star me-2"></i> Publish <span class="badge @if(Request::segment(3) == '') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{$datapublish}}</span></a>
        <a href="{{ url('dasbor/siswa/draft') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'draft') active @endif"><i class="dripicons-document me-2"></i> Draft <span class="badge badge-soft-@if(Request::segment(3) == 'draft') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{$jumlahdraft}}</span></a>
        <a href="{{ url('dasbor/siswa/trash') }}" class="list-group-item list-group-item-action"><i class="dripicons-trash me-2"></i> Trash <span class="badge badge-soft-info float-end ms-2"> {{$jumlahtrash}}</span></a>
    </div>



</div>
<!-- End Left sidebar -->
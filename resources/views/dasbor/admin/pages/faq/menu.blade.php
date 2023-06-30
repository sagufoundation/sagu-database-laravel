<!-- Left sidebar -->
<div class="inbox-leftbar">

    <a href="{{ url('app/faq/create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2"><i
            class="mdi mdi-plus-circle me-2"></i> Tambah data</a>

    <div class="mail-list mt-4">

        <a href="{{ url('app/faq') }}"><i class="dripicons-star me-2"></i>Publish<span
                class="badge badge-soft-info float-end ms-2">{{$jumlahpublish}}</span>
        </a>
        <a href="{{ url('app/faq/draft') }}"><i class="dripicons-document me-2"></i>Draft<span
                class="badge badge-soft-info float-end ms-2">{{$jumlahdraft}}</span>
        </a>

        <a href="{{ url('app/faq/trash') }}"><i class="dripicons-trash me-2"></i>Trash <span
                class="badge badge-soft-info float-end ms-2">{{$jumlahtrash}}</span>
        </a>
    </div>
</div>
<!-- End Left sidebar -->

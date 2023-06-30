@extends('layouts.base_panel')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">kategori</li>
                </ol>
            </div>
            <h4 class="page-title">Trash</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{ url('app/pengajuan') }}" class="btn btn-danger mb-2"><i
                                class="mdi mdi-arrow-left me-2"></i> Kembali</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul Topik</th>
                            <th>Keterangan</th>
                            <th class="text-center" width="200px">Opsi</th>
                        </tr>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ ++$i }}</td>

                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->judul_topik }}</td>
                            <td>{{ $data->keterangan }}</td>

                            <td class="text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ url('app/pengajuan/restore',$data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ url('app/pengajuan/delete',$data->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip"
                                                title='Delete'>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </table>


                </div>
                {!! $datas->links() !!}
            </div> <!-- end card-body-->

        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
</div>

<!-- end row -->

<!--end wrapper-->

@stop



@push('script-footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          swal.fire({
            title: 'Anda Yakin?',
            text: "data akan terhapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Bersihkan!'
          })
          .then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
                )
            }
        });
      });

</script>

@endpush

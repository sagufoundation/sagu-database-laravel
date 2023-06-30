@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/informasi-lingkungan') }}">Kelola Informasi Lingkungan</a></li>
                    <li class="breadcrumb-item active">Trash</li>
                </ol>
            </div>
            <h4 class="page-title">Informasi Lingkungn</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{ url('dasbor/informasi-lingkungan') }}" class="btn btn-danger mb-2 waves-effect waves-light"><i class="mdi mdi-arrow-left me-2"></i> Kembali</a>
                    </div>
                    <div class="col-sm-8">

                    </div><!-- end col-->
                </div>

                <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Keterangan Singkat</th>
                            <th width="210px" class="text-center">Opsi</th>
                        </tr>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ ++$i }}</td>

                            <td>{{ $data->judul }}</td>
                            <td> {{ $data->keterangan_singkat }}</td>
                            <td class="text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <form action="{{ url('dasbor/informasi-lingkungan/restore',$data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{ url('dasbor/informasi-lingkungan/delete',$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
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
<!-- end row -->

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

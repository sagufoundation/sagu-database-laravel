@extends('dasbor.layout.app')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dasbor.pengguna')  }}">Kelola Pengguna</a></li>
                    <li class="breadcrumb-item active">Trash</li>
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
                        <a href="{{ route('dasbor.pengguna') }}" class="btn btn-danger mb-2 waves-effect waves-light"><i class="mdi mdi-arrow-left me-2"></i> Kembali
                        </a>
                    </div>

                </div>

                <div class="table-responsive">


                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th class="text-center" width="210px">Opsi</th>
                        </tr>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td class="align-middle">
                                @if ($data->picture)
                                <img src="{{ asset('gambar/pengguna/'. $data->picture) }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                @else
                                <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                @endif
                            </td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td class="text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <form action="{{ route('dasbor.pengguna.restore',['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">Restore</button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{ route('dasbor.pengguna.destroy',['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger ms-1 show_confirm" data-toggle="tooltip"
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

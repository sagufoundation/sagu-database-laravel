@extends('dasbor.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dasbor') }}">Dasbor</a></li>
                        <li class="breadcrumb-item active">Program</li>
                    </ol>
                </div>
                <h4 class="page-title">Program</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- Left sidebar -->
                    @include('dasbor.program.menu')
                    <!-- End Left sidebar -->

                    <div class="inbox-rightbar">


                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="{{ url()->previous() }}" class="btn btn-danger mb-2"><i class="mdi mdi-arrow-left-circle me-2"></i> Kembali</a>
                            </div>
                            <div class="col-sm-8">
    
                            </div><!-- end col-->
                        </div>
    
                        <div class="table-responsive">
                            <!--
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif -->
    
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
    
                                    <th>Program Title</th>
                                    <th>Short Description</th>
    
                                    <th width="280px">Action</th>
                                </tr>
                                @if(!$datas->isEmpty()) 

                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ ++$i }}</td>
        
                                        <td>{{ $data->program_title ?? '' }}</td>
                                        <td>{{ $data->short_description ?? '' }}</td>
        
                                        <td>
                                        <form action="{{ url('dasbor/program/restore',$data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"> <i class="fa-solid fa-trash-arrow-up"></i> Restore</button>
                                    </form>
                                            <form action="{{ url('dasbor/program/delete',$data->id) }}" method="POST">
        
                                                @csrf
                                                @method('DELETE')
        
                                                <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete'> <i class="fa-solid fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                @else 

                                    <tr>
                                        <td colspan="4">
                                            Empty!
                                        </td>
                                    </tr>

                                @endif
                                
    
                            </table>
    
    
                        </div>
                        {!! $datas->links() !!}

                    </div>

                    

                </div> <!-- end card-->
            </div> <!-- end col -->

        </div>
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

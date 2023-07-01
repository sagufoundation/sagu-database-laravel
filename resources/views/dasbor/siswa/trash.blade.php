@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}">{{ ucfirst(Request::segment(2)) }}</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst(Request::segment(3)) }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ ucfirst(Request::segment(3)) }} {{ ucfirst(Request::segment(2)) }}</h4>
        </div>
    </div>
</div>
<!-- .row end -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <!-- Left sidebar -->
                    @include('dasbor.layout.includes.left-sidebar')
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
    
                                    <th>Name</th>
                                    <th>Email</th>
    
                                    <th width="280px">Action</th>
                                </tr>
                                @if(!$datas->isEmpty()) 

                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ ++$i }}</td>
        
                                        <td>{{ $data->first_name ?? '' }}</td>
                                        <td>{{ $data->email ?? '' }}</td>
        
                                        <td>
                                            @include('dasbor.layout.includes.trash-action')
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

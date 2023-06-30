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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Artikel</a></li>
                                            <li class="breadcrumb-item active">Gambar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Gambar</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                <div class="card-body">
                                            <!-- Left sidebar -->
                                            @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            This is a danger alert—check it out!
                                        </<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(empty($cover))
<div class="alert alert-danger bg-danger text-white border-0" role="alert">
                                            saat ini <strong>Belum Ada</strong> gambar yang dijadikan cover!
                                        </div>
                                        @endif


       <div class="inbox-leftbar">
       <a href="{{ url('app/artikel') }}" class="btn btn-info w-100 waves-effect waves-light mb-2"><i class="mdi mdi-arrow-left-box me-2"></i> Artikel</a>
       <div class="card bg-secondary text-white">
       {!! Form::open(array('route' => 'app.artikel.gambar.store','files'=>'true')) !!}
                                        @csrf
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Menambah Gambar</h5>
                                        <p class="card-text">Max 1 MB</p>

                                        <input type="file" class="custom-file-input" id="image" name="image">
                                    </div>

                                </div>
                                <div class="mb-3">

        <!-- <input type="text" id="subtitle" name="subtitle" class="form-control" placeholder="Sub Title" required> -->
        {!! Form::text('keterangan',null,['required','id'=>'keterangan','class'=>'form-control','placeholder'=>'Keterangan', 'required']) !!}
    </div>
    <input type="hidden" id="artikel_id" name="artikel_id" value="{{$data->id}}">
<button type="submit" class="btn btn-primary w-100 waves-effect waves-light mb-2"><i class="mdi mdi-plus-circle me-2"></i> Tambah data</button>
{!! Form::close() !!}




</div>
<!-- End Left sidebar -->

                                    <div class="inbox-rightbar">

                                    <form action="{{ url('app/artikel/'.$data->id.'/gambar') }}" method="get">
<div class="input-group mb-3">
  <input type="search" name="s" class="form-control" placeholder="Search">
  <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>



                                        <div class="mt-3">
                                        <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Gambar</th>

            <th>Keterangan</th>


            <th>Cover </th>
            <th>Action</th>
        </tr>
        @foreach ($gambars as $gambar)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ url('storage/resource/artikel') }}/{{ $gambar->image}}" alt="image" class="img-fluid img-thumbnail" width="200"></td>
             <td>{{Str::limit($gambar->keterangan, 20)}}</td>

            <td>
            {!! Form::model($data,array('url'=>'app/artikel/gambar/'.$gambar->id.'/primary/','method'=>'put','files'=>'true'))!!}
                                @csrf

                @if($gambar->status == 1)
                <button type="submit" class="btn btn-primary">Cover</button>
                @else

               <button type="submit" class="btn btn-secondary" >Jadikan Cover</button>
                @endif



                    {!! Form::close() !!}
</td> <td>
            <form action="{{ route('app.artikel.gambar.destroy',$gambar->id) }}" method="POST">
                @csrf
                    @method('DELETE')






                    <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
                                        </div>
                                        <!-- end .mt-4 -->

                                        {!! $gambars->links() !!}
                                        <!-- end row-->
                                    </div>
                                    <!-- end inbox-rightbar-->

                                    <div class="clearfix"></div>
                                    </div>

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

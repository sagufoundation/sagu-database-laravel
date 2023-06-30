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
                                            <li class="breadcrumb-item active">role</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">role</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body">
                                        <!-- Left sidebar -->
                                    

<div class="row mb-2">
                                            <div class="col-sm-4">
                                            <a href="{{ url('app/role/create') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>Tambah data</a>
                                            </div>
                                             
                                        </div>
                                    <!-- End Left sidebar -->

                                    
                                    @if (request()->segment(3) == 'draft')
                                    <form action="{{ url('app/role/draft') }}" method="get">
                                        @else
                                    <form action="{{ url('app/role') }}" method="get">
                                        @endif
                                  
<div class="input-group mb-3">
  <input type="search" name="s" class="form-control" placeholder="Search">
  <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>

                                        

                                        <div class="mt-3">
                                      
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
    
    
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
        <td>
    
    <a href="{{ route('app.role.edit',$user->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
     
        {!! Form::open(['method' => 'DELETE','route' => ['app.role.destroy', $user->id],'style'=>'display:inline']) !!}
            <!-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} -->
            <a type="submit" class="action-icon show_confirm"> <i class="mdi mdi-delete merah"></i></a>
        {!! Form::close() !!}  

     
                                                           
                                                           
                                                        </td>
     
  </tr>
 @endforeach
</table>
                                        </div>
                                        <!-- end .mt-4 -->

                                        {!! $data->render() !!}
                                        <!-- end row-->
                                     
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
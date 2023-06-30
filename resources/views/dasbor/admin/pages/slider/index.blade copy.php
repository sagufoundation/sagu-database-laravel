@extends('admin.layouts.app')
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
                                            <li class="breadcrumb-item active">Slider</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Slider</h4>
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
                                                <a href="{{ url('app/slider/create') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Tambah data</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                <a href="{{ url('app/slider/trash') }}" class="mb-2 me-1"><i class="dripicons-trash"></i><span class="badge bg-success rounded-pill float-end">{{$jumlahtrash}}</span></a>
                                                   
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                                        <form action="{{ url('app/slider') }}" method="get">
<div class="input-group mb-3">
  <input type="search" name="search" class="form-control" placeholder="Search">
  <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
                                        <div class="table-responsive">
										<!-- <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari Berdasarkan Judul" aria-label="Recipient's username">
                                                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="button">Cari</button>
                                                </div> -->

                                                <!-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif -->
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Name</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ url('storage/resource/sliders') }}/{{ $data->image}}" width="100px"></td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->status }}</td>
            <td>
                <form action="{{ url('app/slider',$data->id) }}" method="POST">
     
                
      
                    <a class="btn btn-primary" href="{{ url('app/slider/'.$data->id.'/edit') }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
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
  
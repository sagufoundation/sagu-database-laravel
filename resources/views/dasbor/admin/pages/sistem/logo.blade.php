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
                                            <li class="breadcrumb-item active">Logo</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Logo</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body">
                                        <!-- Left sidebar -->
                                        @include('admin.pages.sistem.menu')
                                    <!-- End Left sidebar -->
                                    <div class="inbox-rightbar">

                                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada Form Yang Belum diisi.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Logo -->
{!! Form::model($data,array('url'=>'app/sistem/logo/'.$data->id,'method'=>'put','files'=>'true'))!!}
                                @csrf
<div class="row">
<div class="card">
<div class="card-body">
<div class="mb-3">
    <h4>Logo</h4>
    <div class="mb-3">
        <label for="favicon" class="form-label">Favicon <span class="text-danger">*</span></label>
        {!! Form::file('image',null,['id'=>'image','class'=>'form-control','placeholder'=>'Image Icon']) !!}
        </div>
        @if(!empty($data->logo))

    <img src="{{ url($data->logo)}}" alt="icon" class="img-fluid img-thumbnail" width="200">

    @endif


</div>

<div class="col-3">
<div class="button-list pe-xl-4 d-grid mb-3">
<button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
</div>
</div>

</div>
</div>
</div>
</div>


<!-- end logo -->

{!! Form::close() !!}





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

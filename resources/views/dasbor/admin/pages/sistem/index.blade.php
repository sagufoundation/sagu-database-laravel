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
                                            <li class="breadcrumb-item active">artikel</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">artikel</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body">
                                        <!-- Left sidebar -->
                                        @include('panel.admin.pages.sistem.menu')
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



                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>
                                        {!! Form::model($data,array('url'=>'app/sistem/'.$data->id,'method'=>'put','files'=>'true'))!!}
                                @csrf

    <div class="mb-3">
        <label for="pemilik" class="form-label">Pemilik/Instansi <span class="text-danger">*</span></label>
        {!! Form::text('pemilik',null,['id'=>'pemilik','class'=>'form-control','placeholder'=>'Pemilik/Instansi']) !!}
    </div>
                                <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        {!! Form::text('title',null,['id'=>'title','class'=>'form-control','placeholder'=>'Title']) !!}
    </div>

    <div class="mb-3">
        <label for="tagline" class="form-label">Tagline <span class="text-danger">*</span></label>
        {!! Form::text('tagline',null,['id'=>'tagline','class'=>'form-control','placeholder'=>'Tagline']) !!}
        </div>





        <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        {!! Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Email']) !!}
        </div>

        <div class="mb-3">
        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
        {!! Form::text('phone',null,['id'=>'phone','class'=>'form-control','placeholder'=>'Phone']) !!}
        </div>

        <div class="mb-3">
        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
        {!! Form::text('address',null,['id'=>'address','class'=>'form-control','placeholder'=>'Address']) !!}
        </div>

        <div class="mb-3">
        <label for="facebook" class="form-label">Facebook <span class="text-danger">*</span></label>
        {!! Form::text('facebook',null,['id'=>'facebook','class'=>'form-control','placeholder'=>'Facebook']) !!}
        </div>

        <div class="mb-3">
        <label for="twitter" class="form-label">Twitter <span class="text-danger">*</span></label>
        {!! Form::text('twitter',null,['id'=>'twitter','class'=>'form-control','placeholder'=>'Twitter']) !!}
        </div>

        <div class="mb-3">
        <label for="instagram" class="form-label">Instagram <span class="text-danger">*</span></label>
        {!! Form::text('instagram',null,['id'=>'instagram','class'=>'form-control','placeholder'=>'Instagram']) !!}
        </div>

        <div class="mb-3">
        <label for="youtube" class="form-label">Youtube <span class="text-danger">*</span></label>
        {!! Form::text('youtube',null,['id'=>'youtube','class'=>'form-control','placeholder'=>'Youtube']) !!}
        </div>

        <div class="mb-3">
        <label for="tiktok" class="form-label">Tiktok <span class="text-danger">*</span></label>
        {!! Form::text('tiktok',null,['id'=>'tiktok','class'=>'form-control','placeholder'=>'Tiktok']) !!}
        </div>

        <div class="mb-3">
        <label for="whatsapp" class="form-label">Whatsapp <span class="text-danger">*</span></label>
        {!! Form::text('whatsapp',null,['id'=>'whatsapp','class'=>'form-control','placeholder'=>'Whatsapp']) !!}
        </div>







<div class="col-3">
<div class="button-list pe-xl-4 d-grid mb-3">
<button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>


</div>
</div> <!-- end col -->

{!! Form::close() !!}


                                        <!-- end row-->
                                    </div>
                                    <!-- end inbox-rightbar-->

                                    <div class="clearfix"></div>
                                    </div>

                                </div> <!-- end card-->
                                              <!-- end row -->


                            </div> <!-- end col -->

                            </div>

                        </div>



  <!--end wrapper-->

  @stop

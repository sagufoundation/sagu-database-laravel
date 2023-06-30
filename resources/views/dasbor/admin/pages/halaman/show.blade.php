@extends('dasbor.layout.app')
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
                    <li class="breadcrumb-item">Halaman</li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <label for="product-name" class="form-label">Title <span class="text-danger">*</span></label>
                    {!!
                    Form::text('judul_halaman',null,['required','id'=>'judul_halaman','class'=>'form-control','placeholder'=>'Title'])
                    !!}
                </div>
                <div class="mb-3">
                    <label for="product-konten" class="form-label">Konten <span class="text-danger">*</span></label>
                    <textarea name="konten" class="ckeditor form-control" id="konten" value="{{ old('konten') }}"
                        cols="30" rows="10">{{ $data->konten}}</textarea>
                </div>


                <div class="mb-3">
                    <label for="Kategori" class="form-label">Gambar <span class="text-danger">*</span></label>
                    <input type="file" name="gambar_cover" class="form-control" id="customFile">
                </div>
                @if(!$data->gambar_cover)
                    <img src="{{ asset('assets/admin/assets/images/image-not.png') }}"
                    alt="image" class="img-fluid img-thumbnail" width="200">
                    @else
                    <img src="{{ asset('file/halaman')}}/{{($data->gambar_cover) }}"
                    class="img-thumbnail" width="200px" alt="Picture">
                @endif


                <div class="mb-3">
                    <label for="product-category" class="form-label">Status <span class="text-danger">*</span></label>
                    {!! Form::select('status', [''=>'Status ...','Publish'=>'Active','Draf'=>'Inactive'],
                    null,['class'=>'form-control select2','id'=>'status','required']) !!}
                </div>

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->
<!--end wrapper-->

<div class="row">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('app.halaman.edit',$data->slug) }}"
                class="btn btn-lg btn-outline-dark waves-effect waves-light">
                <i class="fe-edit"></i> Edit
            </a>
            <a href="{{ route('app.halaman') }}" class="btn btn-light">
                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
            </a>
        </div>
    </div>
</div>


@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" /> -->
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush


@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->

<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
<!-- Dropzone file uploads-->
<!-- <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>
    -->

<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>


<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });


  @endpush

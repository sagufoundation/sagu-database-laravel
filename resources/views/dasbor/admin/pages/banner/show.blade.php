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
                    <li class="breadcrumb-item">Banner</li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail Banner</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <label for="product-name" class="form-label">Judul</label>
                    <input type="text" class="form-control" value="{{ $data->title }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="product-reference" class="form-label">Sub Judul</label>
                    <input type="text" class="form-control" value="{{ $data->subtitle }}" readonly>
                </div>


                <div class="mb-3">
                    <label for="product-reference" class="form-label">Link </label>
                    <input type="text" value="{{ $data->link }}" class="form-control" readonly>
                </div>

                <div class="mb-3">
                    <label for="product-category" class="form-label">Status </label>
                    <input type="text" value="{{ $data->status }}" class="form-control" readonly>
                </div>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Gambar</h5>
                @if(!$data->image)
                    <img src="{{asset('assets/admin/assets/images/image-not.png')}}"
                    alt="image" class="img-fluid img-thumbnail" width="180">
                @else
                <img src="{{asset('file/banner/')}}/{{ $data->image }}"
                    alt="image" class="img-fluid img-thumbnail" width="180">
                @endif
            </div>
        </div> <!-- end col-->
    </div> <!-- end col-->
</div>
<!-- end row -->
<!--end wrapper-->

<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="col-2">
                <div class="button-list pe-xl-4 d-grid mb-1">
                   <a href="{{ route('app.banner') }}" class="btn btn-sm btn-light">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                   </a>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@stop
@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
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
<script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>


<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>




@endpush

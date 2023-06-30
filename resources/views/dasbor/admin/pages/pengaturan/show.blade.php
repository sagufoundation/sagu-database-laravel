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
                    <li class="breadcrumb-item active">Pengaturan</li>
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
                <div class="row">
                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Judul Situs </label>
                            <input type="text" class="form-control" value="{{ $data->judul_situs }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Desckripsi Situs </label>
                            <textarea name="deskripsi_situs" class="form-control" rows="5"
                                readonly>{{$data->deskripsi_situs }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Copy Right </label>
                            <input type="text" class="form-control" value="{{ $data->copyright }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Instagram </label>
                            <input type="text" class="form-control" value="{{ $data->instagram ?? 'Data belum ada' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Facobook </label>
                            <input type="text" class="form-control" value="{{ $data->facebook ?? 'Data belum ada' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Twitter </label>
                            <input type="text" class="form-control" value="{{ $data->twitter ?? 'Data belum ada' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Youtube </label>
                            <input type="text" class="form-control" value="{{ $data->youtube ?? 'Data belum ada' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Linkedin </label>
                            <input type="text" class="form-control" value="{{ $data->linkedin ?? 'Data belum ada'}}" readonly>
                        </div>

                    </div>
                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Favicon</label>
                                            <div class="d-block mb-3">
                                                @if(!$data->favicon)
                                                <img src="{{asset('assets/admin/assets/images/upload.png')}}"
                                                    id="preview-favicon" alt="Profile Picture"
                                                    class="img-thumbnail w-50">
                                                @else
                                                <img src="{{asset('file/cms/image/favicon')}}/{{ $data->favicon }}"
                                                    id="preview-favicon" alt="Profile Picture"
                                                    class="img-thumbnail w-80">
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Logo </label>
                                            <div class="d-block mb-3">
                                                @if(!$data->logo)
                                                <img src="{{asset('assets/admin/assets/images/upload.png')}}"
                                                    id="preview-logo" alt="Profile Picture" class="img-thumbnail w-50">
                                                @else
                                                <img src="{{asset('file/cms/image/logo')}}/{{ $data->logo }}"
                                                    id="preview-favicon" alt="Profile Picture"
                                                    class="img-thumbnail w-80">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Alamat Email</label>
                                <input type="text" class="form-control" value="{{ $data->alamat_email ?? 'Data belum ada'}}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Nomor Telfon</label>
                                <input type="text" class="form-control" value="{{ $data->nomor_telepon ?? 'Data belum ada'}}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Alamat Kantor</label>
                                <textarea name="alamat_kantor" class="form-control" rows="3"
                                    readonly>{{$data->alamat_kantor }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Alamat Maps</label>
                                <iframe src="{{$data->alamat_google_map}}" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card-box">
                            <a href="{{ route('app.pengaturan.edit',$data->slug) }}"
                                class="btn btn-lg btn-outline-dark waves-effect waves-light">
                                <i class="fe-edit"></i> Edit
                            </a>
                            <a href="{{ route('app.pengaturan') }}" class="btn btn-light">
                                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                            </a>
                        </div>
                    </div> <!-- end col -->
                </div>

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
<!--end wrapper-->




@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" /> -->
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush

@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/pesan') }}">Kelola Pesan</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <label for="" class="font-weight-bold">Nama Lengkap</label>
                    <div class="border p-3">
                        {{ $data->judul_topik ?? ''}}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="" class="font-weight-bold">Alamat Email</label>
                    <div class="border p-3">
                        {{ $data->email ?? ''}}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="" class="font-weight-bold">Nomor HP / WA</label>
                    <div class="border p-3">
                        {{ $data->no_telf ?? ''}}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="" class="font-weight-bold">Judul Pesan</label>
                    <div class="border p-3">
                        {{ $data->judul_topik ?? ''}}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="" class="font-weight-bold">Isi Pesan</label>
                    <div class="border p-3">
                        {{ $data->keterangan ?? ''}}
                    </div>
                </div>
                <!-- item end -->
                        
                <div class="mb-3">
                    <label for="" class="font-weight-bold">Tanggal Kirim</label>
                    <div class="border p-3">
                        {{ $data->created_at }}
                    </div>
                </div>
                <!-- item end -->

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dasbor.pesan') }}" class="btn btn-lg btn-light waves-effect waves-light">
                    <i class="fe-arrow-left mr-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


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

@endpush

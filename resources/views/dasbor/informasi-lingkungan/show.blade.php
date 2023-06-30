@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/informasi-lingkungan') }}">Kelola Informasi Lingkungan</a></li>
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
                
                <div class="row">
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Judul</label>
                            <div class="border p-3">
                                {{ $data->judul }}
                            </div>
                        </div>
                        <!-- item end -->              
                                
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Keterangan Singkat</label>
                            <div class="border p-3">
                                {{ $data->keterangan_singkat }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Status</label>
                            <div class="border p-3">
                                {{ $data->status }}
                            </div>
                        </div>
                        <!-- item end -->
                                
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Terbit</label>
                            <div class="border p-3">
                                {{ $data->created_at }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Diubah</label>
                            <div class="border p-3">
                                {{ $data->updated_at }}
                            </div>
                        </div>
                        <!-- item end -->

                    </div>
                    <!-- .col end -->  

                    <div class="col-md-4">
                        <div class="mb-3">
                            @if(empty($data->gambar))
                                <img src="{{ asset('gambar/informasi-lingkungan/00.jpg') }}" class="img-fluid w-100 img-thumbnail" alt="Gambar">
                                @else
                                <img src="{{ asset('gambar/informasi-lingkungan/' . $data->gambar) }}" class="img-fluid w-100 img-thumbnail" alt="Gambar">
                            @endif
                        </div>
                    </div>
                    <!-- .col end -->  
                </div>
                <!-- .row end -->  

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dasbor.informasilingkungan.edit',$data->slug) }}" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fe-edit"></i> Edit
                </a>
                <a href="{{ route('dasbor.informasilingkungan') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                    <i class="mdi mdi-arrow-left mr-1"></i>Kembali
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
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->
<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>
<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endpush

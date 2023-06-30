@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/link-terkait') }}">Link Terkait</a></li>
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

                <h1 class="fw-bold mb-3">{{ $data->judul_halaman }}</h1>
                <p class="mb-3">{{ $data->sub_judul }}</p>

                <div class="mb-3">
                    @if(!$data->gambar_cover)
                        <img src="{{ asset('gambar/link-terkait/00.jpg') }}" alt="gambar" class="img-fluid img-thumbnail img-fluid">
                        @else
                        <img src="{{ asset('gambar/link-terkait/' . $data->gambar_cover ) }}" alt="gambar" class="img-thumbnail img-fluid">
                    @endif
                </div>

                <div class="mb-3">
                    {!! $data->konten !!}
                </div>

                <div class="mb-3">
                    <span class="fw-bold">Status :</span> {!! $data->status !!}
                </div>

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dasbor.halaman.edit',$data->slug) }}" class="btn btn-lg btn-outline-dark waves-effect waves-light">
                    <i class="fe-edit"></i> Edit
                </a>
                <a href="{{ route('dasbor.halaman') }}" class="btn btn-light waves-effect waves-light border">
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

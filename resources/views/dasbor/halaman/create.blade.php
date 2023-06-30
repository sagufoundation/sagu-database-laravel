@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/halaman') }}">Halaman</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah</h4>
        </div>
    </div>
</div>
<!-- row end -->

@if ($errors->any())
<div class="mb-3 alert alert-warning">
    <strong class="d-block mb-2 text-dark">Perhatian!</strong>
    <ul class="list-group">
        @foreach ($errors->all() as $error)
        <li style="list-style: none" class="mb-2">
            <i class="fe-alert-triangle mr-1"></i> {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                {!! Form::open(array('url' => route('dasbor.halaman.store'),'files'=>'true')) !!}
                @csrf

                <div class="row">
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="judul_halaman" class="form-label">Judul Halaman <span class="text-danger">*</span></label>
                            <input type="text" id="judul_halaman" name="judul_halaman" class="form-control" placeholder="Judul Halaman" value="{{ old('judul_halaman') }}">
                            @if ($errors->has('judul_halaman'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('judul_halaman') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="sub_judul" class="form-label">Sub Judul</label>
                            <textarea name="sub_judul" id="sub_judul" rows="3" class="form-control" placeholder="Sub Judul"></textarea>
                            @if ($errors->has('sub_judul'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('sub_judul') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten Halaman <span class="text-danger">*</span></label>
                            <textarea name="konten" class="ckeditor form-control" id="ckeditor" value="{{ old('konten') }}" cols="30" rows="10">{{ old('konten') }}</textarea>
                            @if ($errors->has('konten'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('konten') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="form-group">
                            <label for="status" class="form-label d-block">Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" id="exampleFormControlSelect1">
                                <option value="" hidden>Pilih</option>
                                <option value="Publish" @if(old('status') == 'Publish') Selected @endif>Publish</option>
                                <option value="Draft" @if(old('status') == 'Draft') Selected @endif>Draft</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('status') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                    </div> <!-- end col-8 -->

                    <div class="col-md-4">

                        <div class="mb-3">
                            <div class="mb-2">
                                <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                            </div>
                            <label for="gambar" class="form-label d-block">Gambar<span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar" accept="image/*">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                            </div>
                            @if ($errors->has('gambar'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('gambar') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                    </div> <!-- end col-4 -->
                </div> <!-- end row -->

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fe-save mr-1"></i> Simpan
                </button>
                <a href="{{ route('dasbor.halaman') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                    <i class="fe-arrow-left mr-1"></i> Kembali
                </a>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

{!! Form::close() !!}

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
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

  </script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor', options);

    CKEDITOR.config.height='600px';
</script>
@endpush

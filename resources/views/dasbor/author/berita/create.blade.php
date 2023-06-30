@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah</h4>
        </div>
    </div>
</div>
<!-- end row -->

{{-- @if ($errors->any())
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
@endif --}}

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                {!! Form::open(array('url' => route('dasbor.berita.store'),'files'=>'true')) !!}
                @csrf

                <div class="row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" placeholder="Judul Berita">
                            @if ($errors->has('judul'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('judul') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="form-group">
                            <label for="category_id" class="form-label d-block">Kategori</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                <option value="" hidden>Pilih</option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" @if(old('category_id') == $kategori->id) Selected @endif>{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('category_id') }}</small>
                                </span>
                            @endif

                            <div class="mt-2">
                                <a href="{{ url('dasbor/berita/kategori') ?? '' }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Kategori Baru</a>
                            </div>

                        </div>
                        <!-- input item end-->

                        <div class="form-group">
                            <label for="konten_singkat" class="form-label">Konten Singkat</label>
                            <span class="ml-1 cursor" role="button" title="Konten singkat akan ditampilkan dibagian intro dari sebuah berita."><i class="fa-solid fa-info-circle"></i></span>

                            <textarea name="konten_singkat" class="form-control" placeholder="Konten singkat berita" rows="3">{{ old('konten_singkat') }}</textarea>
                            @if ($errors->has('konten_singkat'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('konten_singkat') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="form-group">
                            <label for="konten" class="form-label">Konten</label>
                            <textarea name="konten" id="ckeditor" class="ckeditor form-control" placeholder="Konten Berita" rows="30">{{ old('konten') }}</textarea>
                            @if ($errors->has('konten'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('konten') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        {{-- <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="" hidden>Pilih</option>
                                <option value="Publish" @if(old('status') == 'Publish') Selected @endif>Publish</option>
                                <option value="Draft" @if(old('status') == 'Draft' ?? 'Selected') Selected @endif>Draft</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('status') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end --> --}}

                    </div>
                    <!-- .col end-->

                    <div class="col-md-4">

                        <div class="mb-3">
                            <div class="mb-2">
                                <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                            </div>
                            <label for="gambar" class="form-label d-block">Gambar</label>
                            <div class="custom-file w-100">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('gambar'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('gambar') }}</small>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- input item end-->
                    </div>
                    <!-- .col end-->
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
                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fe-save"></i> Simpan
                </button>
                <a href="{{ route('dasbor.berita') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                    <i class="fe-arrow-left mr-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function (e) {
               $('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });

    CKEDITOR.config.height='600px';
</script>

@endpush

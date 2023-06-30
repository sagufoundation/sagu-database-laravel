@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/pengguna') }}">Pengguna</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>
<!-- end row -->

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

{{-- <form action="{{ route('dasbor.pengguna.update') }}" method="POST" enctype="multipart/form-data"> --}}
{!! Form::open(array('url' => route('dasbor.pengguna.update',['id'=> $data->id]),'files'=>'true')) !!}
@csrf
@method('put')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name') ?? $data->name }}">
                                @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('name') }}</small>
                                </span>
                                @endif
                            </div>
                            <!-- inpute item end -->

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="{{ old('email') ?? $data->email }}">
                                @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email') }}</small>
                                </span>
                                @endif
                            </div>
                            <!-- inpute item end -->

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                                @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password') }}</small>
                                </span>
                                @endif
                            </div>
                            <!-- inpute item end -->

                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi </label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Kata Sandi">
                                @if ($errors->has('confirm-password'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('confirm-password') }}</small>
                                </span>
                                @endif
                            </div>
                            <!-- inpute item end -->

                            <div class="form-group">
                                <label for="peran" class="form-label">Peran <span class="text-danger">*</span></label>
                                <select name="peran" class="form-control">
                                    <option value="" hidden></option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if($role->id == $role->id) Selected @endif>{{ $role->display_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('peran'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('status') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="form-group">
                                <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="" hidden>Pilih</option>
                                    <option value="{{ $data->status }}" hidden>{{ $data->status }}</option>
                                    <option value="Publish" @if($data->status == 'Publish') Selected @endif>Publish</option>
                                    <option value="Draft" @if($data->status == 'Draft') Selected @endif>Draft</option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('status') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item end -->

                        </div>
                        <!-- col end -->

                        <div class="col-md-4">

                            <div class="mb-3">
                                <div class="mb-2">
                                    @if (!$data->picture)
                                    <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar" id="preview-picture" class="img-thumbnail img-fluid">
                                    @else
                                    <img src="{{ asset('gambar/pengguna/' . $data->picture) }}" alt="Gambar" alt="Gambar" id="preview-picture" class="img-thumbnail img-fluid" >
                                    @endif
                                </div>
                                <label for="picture" class="form-label d-block">Gambar <span class="text-danger">*</span></label>
                                <div class="custom-file w-100">
                                    <input type="file" name="picture" class="custom-file-input" id="picture" accept="image/*">
                                    <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                    <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                    @if ($errors->has('picture'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('picture') }}</small>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- input item end-->

                        </div>
                        <!-- col end -->

                    </div>
                    <!-- end row -->

            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card-box">
            <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                <i class="fe-save mr-1"></i> Simpan
            </button>
            <a href="{{ url('dasbor/pengguna/' . $data->slug . '/detail') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                <i class="fe-eye mr-1"></i> Detail
            </a>
            <a href="{{ route('dasbor.pengguna') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                <i class="fe-arrow-left mr-1"></i> Kembali
            </a>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

</form> <!-- end form -->

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
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#picture').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-picture').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
        });
    });

    CKEDITOR.config.height='400px';
</script>

@endpush

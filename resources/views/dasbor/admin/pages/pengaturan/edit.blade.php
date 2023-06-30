@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/pengaturan') }}">Pengaturan</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::model($data,array('url'=>'dasbor/pengaturan/update/' . $data->id,'method'=>'post','files'=>'true'))!!}
    @csrf
    @method('put')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        @if(Request::segment(4) == 'informasi-situs')

                        <input type="hidden" name="inputGroup" value="informasi-situs">

                        <div class="mb-3">
                            <label for="judul_situs" class="form-label">Judul Situs</label>
                            <input type="text" id="judul_situs" name="judul_situs" placeholder="" class="form-control" value="{{ old('judul_situs', $data->judul_situs) }}">
                            @if ($errors->has('judul_situs'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('judul_situs') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="deskripsi_situs" class="form-label">Deskripsi Situs</label>
                            <textarea name="deskripsi_situs" class="form-control" rows="3" placeholder="Type..">{{ old('deskripsi_situs', $data->deskripsi_situs) }}</textarea>
                            @if ($errors->has('deskripsi_situs'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('deskripsi_situs') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="copyright" class="form-label">Copyright</label>
                            <textarea name="copyright" id="" rows="5" class="ckeditor form-control">{{ old('copyright', $data->copyright) }}</textarea>
                            @if ($errors->has('copyright'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('copyright') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->


                        @elseif(Request::segment(4) == 'kontak')

                        <input type="hidden" name="inputGroup" value="kontak">

                        <div class="mb-3">
                            <label for="alamat_email" class="form-label">Alamat Email</label>
                            <input type="email" id="alamat_email" name="alamat_email" placeholder="" class="form-control" value="{{ old('alamat_email', $data->alamat_email) }}">
                            @if ($errors->has('alamat_email'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('alamat_email') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" id="nomor_telepon" name="nomor_telepon" placeholder="" class="form-control" value="{{ old('nomor_telepon', $data->nomor_telepon) }}">
                            @if ($errors->has('nomor_telepon'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('nomor_telepon') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->    
                            
                        <div class="mb-3">
                            <label for="alamat_kantor" class="form-label">Alamat Kantor</label>
                            <textarea name="alamat_kantor" class="form-control" rows="3" placeholder="Type..">{{ old('alamat_kantor', $data->alamat_kantor) }}</textarea>
                            @if ($errors->has('alamat_kantor'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('alamat_kantor') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Alamat Google Map</label>
                            <textarea name="alamat_google_map" class="form-control" rows="5" placeholder="Embed HTML link maps..">{{ old('alamat_google_map',$data->alamat_google_map) }}</textarea>
                            @if ($errors->has('alamat_google_map'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('alamat_google_map') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->  








                        
                        @elseif(Request::segment(4) == 'logo')

                        <input type="hidden" name="inputGroup" value="logo">

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo) }}" id="logo" alt="gambar logo" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo" class="custom-file-input" id="logo" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->


                        <div class="mb-3">
                            <label for="logo_loader" class="form-label">Logo Loader</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo_loader)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo_loader" alt="gambar logo loader" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo_loader) }}" id="logo_loader" alt="gambar logo loader" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo_loader" class="custom-file-input" id="logo_loader" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo_loader'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo_loader') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->
                        

                        <div class="mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <div class="d-block mb-3">
                                @if(!$data->favicon)
                                <img src="{{ asset('gambar/0.jpg') }}" id="favicon" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->favicon) }}" id="favicon" alt="gambar favicon" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="favicon" class="custom-file-input" id="favicon" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('favicon'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('favicon') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->









                        
                        @elseif(Request::segment(4) == 'media-sosial')

                        <input type="hidden" name="inputGroup" value="media-sosial">
                            
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" id="instagram" name="instagram" value="{{ old('instagram', $data->instagram) }}" class="form-control">
                        </div>
                        <!-- input item end -->
                        
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facobook</label>
                            <input type="text" id="facebook" name="facebook" value="{{ old('facebook', $data->facebook) }}" class="form-control">
                        </div>
                        <!-- input item end -->                        

                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" id="twitter" name="twitter" value="{{ old('twitter', $data->twitter) }}" class="form-control">
                        </div>
                        <!-- input item end -->                     

                        <div class="mb-3">
                            <label for="tiktok" class="form-label">Tiktok</label>
                            <input type="text" id="tiktok" name="tiktok" value="{{ old('tiktok', $data->tiktok) }}" class="form-control">
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" value="{{ old('linkedin', $data->linkedin) }}" class="form-control">
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="text" id="youtube" name="youtube" value="{{ old('youtube', $data->youtube) }}" class="form-control">
                        </div>
                        <!-- input item end -->   
                        
                        











                        @elseif(Request::segment(4) == 'logo-dasbor')


                        <input type="hidden" name="inputGroup" value="logo-dasbor">

                        <div class="mb-3">
                            <label for="logo_dasbor_lg_dark" class="form-label">Logo Dasbor Large Dark</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo_dasbor_lg_dark)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo_dasbor_lg_dark" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo_dasbor_lg_dark) }}" id="logo_dasbor_lg_dark" alt="gambar logo" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo_dasbor_lg_dark" class="custom-file-input" id="logo" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo_dasbor_lg_dark'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo_dasbor_lg_dark') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="logo_dasbor_sm_dark" class="form-label">Logo Dasbor Small Dark</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo_dasbor_sm_dark)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo_dasbor_sm_dark" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo_dasbor_sm_dark) }}" id="logo_dasbor_sm_dark" alt="gambar logo" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo_dasbor_sm_dark" class="custom-file-input" id="logo" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo_dasbor_sm_dark'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo_dasbor_sm_dark') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="logo_dasbor_lg_light" class="form-label">Logo Dasbor Large Light</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo_dasbor_lg_light)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo_dasbor_lg_light" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo_dasbor_lg_light) }}" id="logo_dasbor_lg_light" alt="gambar logo" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo_dasbor_lg_light" class="custom-file-input" id="logo" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo_dasbor_lg_light'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo_dasbor_lg_light') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->

                        <div class="mb-3">
                            <label for="logo_dasbor_sm_light" class="form-label">Logo Dasbor Small Light</label>
                            <div class="d-block mb-3">
                                @if(!$data->logo_dasbor_sm_light)
                                <img src="{{ asset('gambar/0.jpg') }}" id="logo_dasbor_sm_light" alt="gambar logo" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/pengaturan/' . $data->logo_dasbor_sm_light) }}" id="logo_dasbor_sm_light" alt="gambar logo" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="custom-file w-100">
                                <input type="file" name="logo_dasbor_sm_light" class="custom-file-input" id="logo" value="">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                @if ($errors->has('logo_dasbor_sm_light'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('logo_dasbor_sm_light') }}</small>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <!-- input item end -->









                        @endif

                        
                    </div>

                </div> 
                <!-- end row -->

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card-box">
            <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                <i class="fe-save mr-1"></i> Simpan
            </button>
            <a href="{{ route('dasbor.pengaturan') }}" class="btn btn-lg btn-light">
                <i class="fe-arrow-left mr-1"></i> Kembali
            </a>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

{!! Form::close() !!}



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
</script>

@endpush


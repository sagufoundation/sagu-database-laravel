@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}">{{ ucfirst(Request::segment(2)) }}</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst(Request::segment(3)) }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ ucfirst(Request::segment(3)) }} {{ ucfirst(Request::segment(2)) }}</h4>
        </div>
    </div>
</div>
<!-- .row end -->

{!! Form::open(array('url' => route('dasbor.program.store'),'files'=>'true')) !!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>

                <div class="mb-3">
                    <label for="program_title" class="form-label">Program Title <span class="text-danger">*</span></label>
                    <input type="text" name="program_title" id="program_title" value="{{ old('program_title') ?? '' }}" placeholder="Program Title" class="form-control">
                    @if ($errors->has('program_title'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('program_title') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea name="short_description" id="short_description" cols="30" rows="3" class="form-control">{{ old('short_description') ?? '' }}</textarea>
                    @if ($errors->has('short_description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('short_description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="form-group">
                    <label for="full_description" class="form-label">Full Description</label>
                    <textarea name="full_description" id="ckeditor" class="ckeditor form-control" rows="30" placeholder="Full Description">{{ old('konten') }}</textarea>
                    @if ($errors->has('full_description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('full_description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input item end-->

                <div class="mb-3">
                    <select class="custom-select" name="status">
                        <option value="Draft" selected>Draft</option>
                        <option value="Publish">Publish</option>
                      </select>
                </div>
                <!-- input group end -->

            </div>
        </div> <!-- .card end -->
    </div> <!-- .col end -->
</div> <!-- .row end -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-3">
                    <div class="button-list pe-xl-4 d-grid mb-3">
                        <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save me-1"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div> <!-- .card end -->
    </div> <!-- end col -->
</div> <!-- .row row -->
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
<script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>
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

    CKEDITOR.config.height='600px';
</script>

@endpush

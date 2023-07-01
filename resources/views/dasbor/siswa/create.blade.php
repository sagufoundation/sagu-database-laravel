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

{!! Form::open(array('url' => route('dasbor.siswa.store'),'files'=>'true')) !!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">BIOGRAPHY</h5>

                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? '' }}" placeholder="First Name" class="form-control">
                    @if ($errors->has('first_name'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('first_name') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="middle_name" class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name') ?? '' }}" placeholder="Middle Name" class="form-control">
                    @if ($errors->has('middle_name'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('middle_name') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? '' }}" placeholder="Last Name" class="form-control">
                    @if ($errors->has('last_name'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('last_name') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->
                
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">CONTACT INFORMATION</h5>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') ?? '' }}" placeholder="Phone" class="form-control">
                    @if ($errors->has('phone'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('phone') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="email_google" class="form-label">Email (by Google)</label>
                    <input type="email" name="email_google" id="email_google" value="{{ old('email_google') ?? '' }}" placeholder="your.name@gmail.com" class="form-control">
                    @if ($errors->has('email_google'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_google') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="email_outlook" class="form-label">Email (by Microsoft Outlook)</label>
                    <input type="email" name="email_outlook" id="email_outlook" value="{{ old('email_outlook') ?? '' }}" placeholder="your.name@outlook.com" class="form-control">
                    @if ($errors->has('email_outlook'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_outlook') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="email_sagu" class="form-label">Email (by SAGU Foundation)</label>
                    <input type="email" name="email_sagu" id="email_sagu" value="{{ old('email_sagu') ?? '' }}" placeholder="your.name@sagufoundation.org" class="form-control">
                    @if ($errors->has('email_sagu'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_sagu') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->
                
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">ADDRESS</h5>

                <div class="mb-3">
                    <label for="full_address" class="form-label">Full Address</label>
                    <textarea name="full_address" id="full_address" cols="30" rows="3" class="form-control">{{ old('full_address') ?? '' }}</textarea>
                    @if ($errors->has('full_address'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('full_address') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="form-group">
                    <label for="education_history" class="form-label">Education History</label>
                    <textarea name="education_history" id="ckeditor" class="ckeditor form-control" rows="30">{{ old('education_history') ?? '' }}</textarea>
                    @if ($errors->has('education_history'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('education_history') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input item end-->

                @include('dasbor.layout.includes.form-input.status')
                <!-- input item end-->

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

@extends('dashboard.layout.app')
@section('content')

                        @include('dasbor.layout.includes.breadcrumb3')

{!! Form::open(array('url' => route('dasbor.documents.store'),'files'=>'true')) !!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title') ?? '' }}" placeholder="Title" class="form-control">
                        @if ($errors->has('title'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('title') }}</small>
                            </span>
                        @endif
                    </div>
                    <!-- input group end -->
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" value="{{ old('description') ?? '' }}" placeholder="Description" class="form-control">
                        @if ($errors->has('description'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('description') }}</small>
                            </span>
                        @endif
                    </div>
                    <!-- input group end -->
    
                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="text" name="url" id="url" value="{{ old('url') ?? '' }}" placeholder="url" class="form-control">
                        @if ($errors->has('url'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('url') }}</small>
                            </span>
                        @endif
                        <small class="text-muted mt-1 d-block">
                            <i class="fa-solid fa-info-circle"></i> URL atau alamat dokumen diambil dari google alamat file di dalam google drive.
                        </small>
                    </div>
                    <!-- input group end -->
                </div>

            </div>
        </div> <!-- .card end -->
    </div> <!-- .col end -->
</div> <!-- .row end -->

@include('dasbor.layout.includes.form-input.submit-button')

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
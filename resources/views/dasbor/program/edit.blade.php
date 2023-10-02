@extends('dasbor.layout.app')
@section('content')

                        @include('dasbor.layout.includes.breadcrumb3')

{!! Form::model($data, array( 'url'=>'dashboard/programs/'. $data->id, 'method'=>'put','files'=>'true'))!!}
@csrf
@method('put')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>

                <div class="mb-3">
                    <label for="program_title" class="form-label">Program Title <span class="text-danger">*</span></label>
                    <input type="text" name="program_title" id="program_title" value="{{ old('program_title') ?? $data->program_title }}" placeholder="Program Title" class="form-control">
                    @if ($errors->has('program_title'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('program_title') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->
                <div class="mb-3">
                    <label for="program_start" class="form-label">Program Duration <span class="text-danger">*</span></label>

                    <div class="row">
                        <div class="col-md-6">
                            <input
                                type="date"
                                name="program_start"
                                id="program_start"
                                value="{{ old('program_start',$data->program_start) ?? '' }}"
                                placeholder="Program Start"
                                class="form-control">
                                @if ($errors->has('program_title'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('program_start') }}</small>
                                    </span>
                                @endif
                        </div>
                        <div class="col-md-6">
                            <input
                                type="date"
                                name="program_end"
                                id="program_end"
                                value="{{ old('program_end',$data->program_end) ?? '' }}"
                                placeholder="Program End"
                                class="form-control">
                                @if ($errors->has('program_title'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('program_end') }}</small>
                                    </span>
                                @endif
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea name="short_description" id="short_description" cols="30" rows="3" class="form-control">{{ old('short_description') ?? $data->short_description }}</textarea>
                    @if ($errors->has('short_description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('short_description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="form-group">
                    <label for="full_description" class="form-label">Full Description</label>
                    <textarea name="full_description" id="ckeditor" class="ckeditor form-control" rows="30" placeholder="Full Description">{{ old('konten') ?? $data->full_description }}</textarea>
                    @if ($errors->has('full_description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('full_description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input item end-->

                <div class="mb-3">
                    <select class="custom-select" name="status">
                        <option value="Draft" @if($data->status == 'Draft') selected @endif>Draft</option>
                        <option value="Publish" @if($data->status == 'Publish') selected @endif>Publish</option>
                    </select>
                </div>
                <!-- input group end -->

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

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

    CKEDITOR.config.height='400px';
</script>
@endpush

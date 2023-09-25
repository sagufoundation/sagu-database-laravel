@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb3')

                        {!! Form::open(array('url' => route('dashboard.books.store'),'files'=>'true')) !!}
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                                    <input type="text" name="title" id="title" value="{{ old('title') ?? '' }}" placeholder="Title of the book" class="form-control">
                                                    @if ($errors->has('title'))
                                                        <span class="text-danger" role="alert">
                                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('title') }}</small>
                                                        </span>
                                                    @endif
                                                </div>
                                                <!-- input group end -->

                                                <div class="mb-3">
                                                    <div class="mb-2 col-lg-3 p-0">
                                                        <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile image not found" class="img img-thumbnail" id="preview-images">
                                                    </div>
                                                    <label for="image" class="form-label d-block">Images</label>
                                                    <div class="custom-file w-100">
                                                        <input type="file" name="image" class="custom-file-input" id="image" value="">
                                                        <small class="text-muted mt-2 d-block">Choose a file from your computer</small>
                                                        <label class="custom-file-label" for="customFile">Upload images</label>
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('image') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- input group end -->

                                            </div>
                                        </div>
                                        <!-- input item end-->

                                    </div>
                                </div> <!-- .card end -->
                            </div> <!-- .col end -->
                        </div> <!-- .row end -->

                        @include('dashboard.layout.includes.form-input.submit-button')

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
               $('#images').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-images').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });

    CKEDITOR.config.height='150px';
</script>
@endpush

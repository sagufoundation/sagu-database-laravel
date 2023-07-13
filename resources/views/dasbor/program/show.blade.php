@extends('dasbor.layout.app')
@section('content')

                        @include('dasbor.layout.includes.breadcrumb3')
    
{!! Form::model($data, array( 'url'=>'dasbor/program/'. $data->id, 'method'=>'put','files'=>'true'))!!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>

                <div class="mb-3">
                    <label for="program_title" class="form-label">Program Title</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->program_title ?? '' }}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->short_description ?? '' }}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="full_description" class="form-label">Full Description</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->full_description ?? '' }}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->status ?? '' }}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="created_at" class="form-label">Created at</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->created_at ?? '' }}
                    </div>
                </div>
                <!-- item end -->

                <div class="mb-3">
                    <label for="updated_at" class="form-label">Updated at</label>
                    <div class="border-bottom border-1 pb-1">
                        {{ $data->updated_at ?? '' }}
                    </div>
                </div>
                <!-- item end -->

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

@include('dasbor.layout.includes.form-input.edit-button')

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
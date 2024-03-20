@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

{!! Form::open(array('url' => route('dashboard.programs.store'),'files'=>'true')) !!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="program_title" class="form-label">Program Title <span class="text-danger">*</span></label>
                            <input type="text" name="program_title" id="program_title" value="{{ old('program_title') ?? '' }}" placeholder="Program title" class="form-control">
                            @if ($errors->has('program_title'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('program_title') }}</small>
                            </span>
                            @endif
                        </div>


                        <!-- input group end -->
                        <div class="mb-3">
                            <label for="year" class="form-label">Group</label>
                            <select name="group_id" id="" class="form-control">
                                <option value="" hidden>Select</option>
                                @foreach ($groups as $group )
                                    <option @if(old('group_id') == $group->id) {{'selected'}} @endif value="{{$group->id}}">{{$group->group_title}}</option>
                                @endforeach ($x = 2019; $x<= 2030; $x++)
                            </select>
                            @if ($errors->has('group_id'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                    {{$errors->first('group_id') }}
                                </small>
                            </span>
                            @endif
                        </div>


                        <!-- input group end -->
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <select name="program_year" id="" class="form-control">
                                <option value="" hidden>Select</option>
                                @for ($x = 2019; $x<= 2030; $x++)
                                    <option @if(old('program_year') == $x) {{'selected'}} @endif value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>
                            @if ($errors->has('year'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                    {{$errors->first('year') }}
                                </small>
                            </span>
                            @endif
                        </div>

                        <!-- input group end -->

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description"  cols="30" rows="5" class="form-control" placeholder="Write a short description here">{{ old('short_description') ?? '' }}</textarea>
                                @if ($errors->has('short_description'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                        $errors->first('short_description') }}</small>
                                </span>
                                @endif
                        </div>
                        <!-- input group end -->

                        <div class="mb-3">
                            <label for="full_description" class="form-label">Full Description</label>
                            <textarea name="full_description" id="ckeditor" cols="30" rows="5" class="form-control" placeholder="The full description">{{ old('full_description') ?? '' }}</textarea>
                                @if ($errors->has('full_description'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                        $errors->first('full_description') }}</small>
                                </span>
                                @endif
                        </div>
                        <!-- input group end -->

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="" hidden>Select</option>
                                <option value="Publish">Publish</option>
                                <option value="Draft" selected>Draft</option>
                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                    {{$errors->first('status') }}
                                </small>
                            </span>
                            @endif
                        </div>
                        <!-- input group end -->

                    </div>
                    <!-- col end -->
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
        $('#picture').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-picture').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    CKEDITOR.config.height='300px';
</script>

<script>
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("width", "100%");
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("height", "500px");
    // document.getElementById("doc_google_sheets").setAttribute("class", "democlass");
</script>

@endpush


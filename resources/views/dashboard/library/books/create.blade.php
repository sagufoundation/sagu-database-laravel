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
                            <input type="text" name="title" id="title" value="{{ old('title') ?? '' }}"
                                placeholder="Title of the book" class="form-control">
                            @if ($errors->has('title'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('title') }}</small>
                            </span>
                            @endif
                        </div>
                        <!-- input group end -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="author_id" class="form-label">Author <span class="text-danger">*</span></label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        <option value="" hidden>Select</option>
                                        @foreach ($authors as $author )
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('author_id'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('author_id') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="catagory_id" class="form-label">Categories <span class="text-danger">*</span></label>
                                    <select name="catagory_id" id="catagory_id" class="form-control">
                                        <option value="" hidden>Select</option>
                                        @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('catagory_id'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('catagory_id') }}</small>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <!-- input group end -->

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="total" class="form-label">Total Book <span class="text-danger">*</span></label>
                                    <input type="number" name="total" id="total" value="{{ old('total') ?? '' }}" class="form-control">
                                    @if ($errors->has('total'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('total') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" id="" class="form-control">
                                        <option value="" hidden>Select</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                            {{$errors->first('status') }}
                                        </small>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <!-- input group end -->
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="mb-2 col-lg-3 p-0">
                                <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}"
                                    alt="Profile image not found" class="img img-thumbnail" id="preview-images">
                            </div>
                            <label for="image" class="form-label d-block">Images</label>
                            <div class="custom-file w-100">
                                <input type="file" name="cover" class="custom-file-input" id="image" value="">
                                <small class="text-muted mt-2 d-block">Choose a file from your computer</small>
                                <label class="custom-file-label" for="customFile">Upload images</label>
                                @if ($errors->has('image'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                        $errors->first('image') }}</small>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- input group end -->

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

@push('script-footer')

<script type="text/javascript">
    CKEDITOR.replace('ckeditor', options);
    CKEDITOR.config.height='600px';
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    CKEDITOR.config.height='150px';

    $(document).ready(function (e) {
               $('#images').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-images').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });


</script>
@endpush

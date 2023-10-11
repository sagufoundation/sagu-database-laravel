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
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" value="{{ old('title') ?? '' }}" placeholder="Title of the book" class="form-control">
                            @if ($errors->has('title'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('title') }}</small>
                            </span>
                            @endif
                        </div>
                        <!-- input group end -->

                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="mb-3">
                                    <label for="author_id" class="form-label">Author <span class="text-danger">*</span></label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        <option value="" hidden>Select</option>
                                        @foreach ($authors as $author )
                                            <option value="{{ $author->id }}" @if(old('author_id') == $author->id) selected @endif>{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('author_id'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('author_id') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <!-- input group end -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="catagory_id" class="form-label">Categories <span class="text-danger">*</span></label>
                                    <select name="catagory_id" id="catagory_id" class="form-control">
                                        <option value="" hidden>Select</option>
                                        @foreach ($categories as $category )
                                            <option value="{{ $category->id }}" @if(old('catagory_id') == $category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('catagory_id'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('catagory_id') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <!-- input group end -->

                            </div>
                            <!-- end col -->
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="status" class="form-label">Summary</label>
                                <textarea name="" id="" rows="5" class="form-control" placeholder="Write your book's summary here"></textarea>
                                @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                        {{$errors->first('status') }}
                                    </small>
                                </span>
                                @endif

                            </div>
                        </div>                        

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="total" class="form-label">Total Book(s) <span class="text-danger">*</span></label>
                                    <input type="number" name="total" id="total" value="{{ old('total') ?? '' }}" class="form-control">
                                    @if ($errors->has('total'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                            $errors->first('total') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <!-- input group end -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-6">
                                

                            </div>
                            <!-- end col -->
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="mb-2 p-0">
                                <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile image not found" class="img img-thumbnail" id="preview-cover">
                            </div>
                            <label for="cover" class="form-label d-block">Cover</label>
                            <div class="custom-file w-100">
                                <input type="file" name="cover" class="custom-file-input" id="cover" value="">
                                <small class="text-muted mt-2 d-block">Choose a file from your computer</small>
                                <label class="custom-file-label" for="customFile">Upload images</label>
                                @if ($errors->has('cover'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                            {{$errors->first('cover') }}
                                        </small>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <!-- input group end -->
                        
                        <div class="mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" id="" class="form-control">
                                <option value="" hidden>Select</option>
                                <option value="Publish" @if(old('status') == 'Publish') selected @endif>Publish</option>
                                <option value="Draft" @if(old('status') == 'Draft') selected @endif>Draft</option>
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
                    <!-- end col -->
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

    $(document).ready(function (e) {
        $('#cover').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-cover').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
        });

    });

</script>
@endpush

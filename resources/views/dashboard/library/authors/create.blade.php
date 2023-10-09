@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

{!! Form::open(array('url' => route('dashboard.authors.store'),'files'=>'true')) !!}
@csrf

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="name" class="form-label">Author Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') ?? '' }}"
                                placeholder="Write the full name" class="form-control">
                            @if ($errors->has('name'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('name') }}</small>
                            </span>
                            @endif
                        </div>
                        <!-- input group end -->

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description"  cols="30" rows="5" class="form-control" placeholder="A short description about this author">{{ old('description') ?? '' }}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                        $errors->first('description') }}</small>
                                </span>
                                @endif
                        </div>
                        <!-- input group end -->
                        
                        <div class="mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
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



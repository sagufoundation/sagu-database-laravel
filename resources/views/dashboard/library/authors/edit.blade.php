@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

{!! Form::open(array('url' => route('dashboard.authors.update',$data->id),'files'=>'true')) !!}
@csrf
@method('put')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="name" class="form-label">Author Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name',$data->name) ?? '' }}"
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
                            <textarea name="description"  cols="30" rows="5" class="form-control" placeholder="A short description about this author">{{ old('description',$data->description) ?? '' }}</textarea>
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
                                <option value="Draft" @if($data->status == 'Draft') selected @endif>Draft</option>
                                <option value="Publish" @if($data->status == 'Publish') selected @endif>Publish</option>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
               $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-images').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });


</script>
@endpush

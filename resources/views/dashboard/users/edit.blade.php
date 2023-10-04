@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

{!! Form::open(array('url' => route('dashboard.users.update',$data->id),'files'=>'true')) !!}
@csrf
@method('put')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="first_name" class="form-label"> First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name',$data->first_name) ?? '' }}"
                                placeholder="First Namee" class="form-control">
                            @if ($errors->has('first_name'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('first_name') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- input group end -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="middle_name" class="form-label"> Middle Name </label>
                            <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name',$data->middle_name) ?? '' }}"
                                placeholder="Middle name" class="form-control">
                            @if ($errors->has('middle_name'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('middle_name') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- input group end -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="last_name" class="form-label"> Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name',$data->last_name) ?? '' }}"
                                placeholder="Middle name" class="form-control">
                            @if ($errors->has('last_name'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('last_name') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- input group end -->

                </div>
                <!-- input item end-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" value="{{ old('email',$data->email) ?? '' }}"
                                placeholder="Email" class="form-control">
                            @if ($errors->has('email'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('email') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                     <!-- input group end -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label"> Phone Number</label>
                            <input type="number" name="phone" id="phone" value="{{ old('phone',$data->phone) ?? '' }}"
                                placeholder="Mobile Phone" class="form-control">
                            @if ($errors->has('phone'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('phone') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                     <!-- input group end -->

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job </label>
                            <input type="text" name="job_title" id="job_title" value="{{ old('job_title',$data->job_title) ?? '' }}"
                                placeholder="job title" class="form-control">
                            @if ($errors->has('job_title'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('job_title') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="roles" class="form-label"> Roles <span class="text-danger">*</span></label>
                            <select name="roles" id="roles" class="form-control">
                                <option value="" hidden>Select</option>
                                @php
                                    $idRole = implode(",",$data->roles()->pluck('id')->toArray())
                                @endphp
                                @foreach ($roles as $role )
                                    @if ($role->name === "student")
                                    @else
                                     <option value="{{ $role->id }}"
                                        @if ($idRole == $role->id)selected="selected"  @endif>
                                        {{ $role->display_name }}
                                    </option>
                                    @endif
                                @endforeach

                            </select>
                            @if ($errors->has('roles'))
                            <span class="text-danger" role="alert">
                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                    $errors->first('roles') }}</small>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- input group end -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password </label>
                            <input type="password" name="password" id="password"
                                placeholder="*********" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                                        $errors->first('password') }}</small>
                                </span>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmation Password </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="*********" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">

                            <label for="picture" class="form-label d-block">Picture</label>
                            <div class="custom-file w-100">
                                <input type="file" name="picture" class="custom-file-input" id="picture" value="">
                                <small class="text-muted mt-2 d-block">Choose a file from your computer</small>
                                <label class="custom-file-label" for="customFile">Upload images</label>
                                @if ($errors->has('picture'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i>
                                            {{$errors->first('picture') }}
                                        </small>
                                    </span>
                                    @endif
                            </div>
                            <div class="mb-2 p-0">
                                @if (!$data->picture)
                                    <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile image not found"
                                    class="img img-thumbnail" id="preview-images" width="80">
                                @else
                                <img src="{{ asset($data->picture) }}" alt="Profile image not found"
                                class="img img-thumbnail" id="preview-images" width="80">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
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

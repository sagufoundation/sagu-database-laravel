@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb3')

                        {!! Form::open(array('url' => route('dashboard.students.store'),'files'=>'true')) !!}
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">BIOGRAPHY</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? '' }}" placeholder="First Name" class="form-control">
                                                            @if ($errors->has('first_name'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('first_name') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="middle_name" class="form-label">Middle Name</label>
                                                            <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name') ?? '' }}" placeholder="Middle Name" class="form-control">
                                                            @if ($errors->has('middle_name'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('middle_name') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="last_name" class="form-label">Last Name</label>
                                                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? '' }}" placeholder="Last Name" class="form-control">
                                                            @if ($errors->has('last_name'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('last_name') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="place_of_birth" class="form-label">Place Of Birth  Name</label>
                                                            <input type="text" name="place_of_birth" id="place_of_birth" value="{{ old('place_of_birth') ?? '' }}" placeholder="Place Of Birth" class="form-control">
                                                            @if ($errors->has('place_of_birth'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('place_of_birth') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="date_of_birth" class="form-label">Date Of Birth  Name</label>
                                                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('place_of_birth') ?? '' }}"  class="form-control">
                                                            @if ($errors->has('date_of_birth'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('date_of_birth') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                </div>

                                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">CREATE ACCOUNT </h5>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                            <input type="email" name="email" id="email" value="{{ old('email') ?? '' }}" placeholder="Email" class="form-control">
                                                            @if ($errors->has('email'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label"> Password <span class="text-danger">*</span></label>
                                                            <input type="password" name="password" id="password"  placeholder="*******" class="form-control">
                                                            @if ($errors->has('password'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="password_confirmation" class="form-label">Confirmation Password <span class="text-danger">*</span></label>
                                                            <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="******" class="form-control">
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password_confirmation') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>

                                                </div>
                                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">CONTACT INFORMATION</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="phone" class="form-label">Phone Number</label>
                                                            <input type="text" name="phone" id="phone" value="{{ old('phone') ?? '' }}" placeholder="Phone" class="form-control">
                                                            @if ($errors->has('phone'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('phone') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="email_google" class="form-label">Email (by Google)</label>
                                                            <input type="email" name="email_google" id="email_google" value="{{ old('email_google') ?? '' }}" placeholder="your.name@gmail.com" class="form-control">
                                                            @if ($errors->has('email_google'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_google') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="email_outlook" class="form-label">Email (by Microsoft Outlook)</label>
                                                            <input type="email" name="email_outlook" id="email_outlook" value="{{ old('email_outlook') ?? '' }}" placeholder="your.name@outlook.com" class="form-control">
                                                            @if ($errors->has('email_outlook'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_outlook') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="email_sagu" class="form-label">Email (by SAGU Foundation)</label>
                                                            <input type="email" name="email_sagu" id="email_sagu" value="{{ old('email_sagu') ?? '' }}" placeholder="your.name@sagufoundation.org" class="form-control">
                                                            @if ($errors->has('email_sagu'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_sagu') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                </div>

                                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">ADDRESS</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="province_id" class="form-label">Province <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="province_id">
                                                                <option value="" hidden>Select</option>
                                                                @foreach ($provinces as  $province)
                                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                                @endforeach

                                                            </select>
                                                            @if ($errors->has('province_id'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('province_id') }}</small>
                                                            </span>
                                                        @endif
                                                        </div>
                                                        <!-- input group end -->

                                                        {{-- <div class="mb-3">
                                                            <label for="regency" class="form-label">Regency</label>
                                                            <select class="custom-select" name="regency">
                                                                <option value="Draft" selected>Draft</option>
                                                                <option value="Publish">Publish</option>
                                                            </select>
                                                        </div> --}}
                                                        <!-- input group end -->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <label for="full_address" class="form-label">Full Address</label>
                                                            <textarea name="full_address" id="full_address" cols="30" rows="5" class="form-control">{{ old('full_address') ?? '' }}</textarea>
                                                            @if ($errors->has('full_address'))
                                                                <span class="text-danger" role="alert">
                                                                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('full_address') }}</small>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <!-- input group end -->
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-4">

                                                <div class="mb-3">
                                                    <div class="mb-2">
                                                        <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="img img-thumbnail w-100" id="preview-images">
                                                    </div>
                                                    <label for="picture" class="form-label d-block">Images</label>
                                                    <div class="custom-file w-100">
                                                        <input type="file" name="picture" class="custom-file-input" id="images" value="" accept="image/*">
                                                        <small class="text-muted mt-2 d-block">Choose a file from your computer</small>
                                                        <label class="custom-file-label" for="customFile">Upload images</label>
                                                        @if ($errors->has('picture'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('picture') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- input item end-->

                                                <div class="mt-3">
                                                    @include('dashboard.layout.includes.form-input.status')
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

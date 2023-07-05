
                                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">BIOGRAPHY</h5>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? $data->first_name }}" placeholder="First Name" class="form-control">
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
                                                        <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name') ?? $data->middle_name }}" placeholder="Middle Name" class="form-control">
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
                                                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? $data->last_name }}" placeholder="Last Name" class="form-control">
                                                        @if ($errors->has('last_name'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('last_name') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <!-- input group end -->                                
                                                </div>
                                            </div>

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

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="place_of_birth" class="form-label">Place of birth</label>
                                                        <input type="text" name="place_of_birth" id="place_of_birth" value="{{ old('place_of_birth') ?? $data->place_of_birth }}" placeholder="Place of birth" class="form-control">
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
                                                        <label for="date_of_birth" class="form-label">Date of birth</label>
                                                        <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') ?? $data->date_of_birth }}" placeholder="Date of bith" class="form-control">
                                                        @if ($errors->has('date_of_birth'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('date_of_birth') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <!-- input group end -->  
                                                </div>

                                            </div>   

                                            <button  type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
                                                <i class="fa-solid fa-save mr-1"></i> Save
                                            </button>
                                            <!-- submit button end --> 
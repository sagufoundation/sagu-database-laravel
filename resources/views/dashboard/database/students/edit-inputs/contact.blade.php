                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">CONTACT INFORMATION</h5>

                        <div class="row">
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') ?? $data->phone }}" placeholder="Phone" class="form-control">
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
                                    <label for="email_google" class="form-label">Google Mail</label>
                                    <input type="text" name="email_google" id="email_google" value="{{ old('email_google') ?? $data->email_google }}" placeholder="@gmail.com" class="form-control">
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
                                    <label for="email_outlook" class="form-label">Microsot Mail (Outlook)</label>
                                    <input type="text" name="email_outlook" id="email_outlook" value="{{ old('email_outlook') ?? $data->email_outlook }}" placeholder="@outlook.com" class="form-control">
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
                                    <label for="email_sagu" class="form-label">SAGU Mail (@sagufoundation.org)</label>
                                    <input type="text" name="email_sagu" id="email_sagu" value="{{ old('email_sagu') ?? $data->email_sagu }}" placeholder="@sagufoundation.org" class="form-control">
                                    @if ($errors->has('email_sagu'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_sagu') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input group end -->

                            </div>

                            <div class="col-md-4">
                                
                                <div class="mb-3">
                                    <label for="email_campus_1" class="form-label">Campus Mail (@campusname.com)</label>
                                    <input type="text" name="email_campus_1" id="email_campus_1" value="{{ old('email_campus_1') ?? $data->email_campus_1 }}" placeholder="@campusname.com" class="form-control">
                                    @if ($errors->has('email_campus_1'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_campus_1') }}</small>
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
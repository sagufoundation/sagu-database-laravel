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
                                    <label for="email_google" class="form-label">Email (by Google) {{ $data->mail_google ?? 'kosong' }}</label>
                                    <input type="email" name="email_google" id="email_google" value="{{ $data->mail_google }}" placeholder="your.name@gmail.com" class="form-control">
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
                                    <input type="email" name="email_outlook" id="email_outlook" value="{{ old('email_outlook') ?? $data->mail_outlook }}" placeholder="your.name@outlook.com" class="form-control">
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
                                    <input type="email" name="email_sagu" id="email_sagu" value="{{ old('email_sagu') ?? $data->mail_sagu }}" placeholder="your.name@sagufoundation.org" class="form-control">
                                    @if ($errors->has('email_sagu'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('email_sagu') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input group end --> 
                            </div>
                        </div>  
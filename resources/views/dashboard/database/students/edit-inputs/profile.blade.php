                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROFILE</h5>

                        <div class="row">
                            <div class="col-md-12">                                
                                <div class="mb-3">
                                    <label for="profile" class="form-label">Profile Descriptions</label>
                                    <textarea name="profile" id="ckeditor" cols="30" rows="5" class="form-control">{!! old('profile') ?? $data->profile !!}</textarea>
                                    @if ($errors->has('profile'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('profile') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input group end --> 
                                
                                @include('dasbor.layout.includes.form-input.status')
                                <!-- input group end -->   

                            </div>
                        </div>

                        <button  type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save mr-1"></i> Save
                        </button>
                        <!-- submit button end --> 
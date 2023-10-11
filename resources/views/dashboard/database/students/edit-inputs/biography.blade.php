                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">BIOGRAPHY</h5>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="biography" class="form-label">Student Biography</label>
                                    <textarea name="biography" id="ckeditor" cols="30" rows="5" class="form-control">{!! old('biography',$data->student->biography??'') !!}</textarea>
                                    @if ($errors->has('biography'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('biography') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input group end -->

                            </div>
                        </div>
                        <!-- .row end -->

                        <button type="submit" class="btn btn-lg btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save mr-1"></i> Save
                        </button>
                        <!-- submit button end -->

                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">ADDRESS</h5>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="province" class="form-label">Province</label>
                                    <select class="custom-select" name="province">
                                        <option value="Papua" selected>Papua</option>
                                        <option value="Papua Pegunungan">Papua Pegunungan</option>
                                        <option value="Papua Selatan">Papua Selatan</option>
                                        <option value="Papua Tengah">Papua Tengah</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Papua Barat Daya">Papua Barat Daya</option>
                                    </select>
                                </div>
                                <!-- input group end -->
                                
                                <div class="mb-3">
                                    <label for="regency" class="form-label">Regency</label>
                                    <select class="custom-select" name="regency">
                                        <option value="Draft" selected>Draft</option>
                                        <option value="Publish">Publish</option>
                                    </select>
                                </div>
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

                        <button  type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save mr-1"></i> Simpan
                        </button>
                        <!-- submit button end --> 
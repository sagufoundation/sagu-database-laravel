                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">DOCUMENTS (GOOGLE SHEETS)</h5>

                        <div class="row">
                            <div class="col-md-12">                                
                                <div class="mb-3">
                                    <label for="doc_google_sheets" class="form-label">Google Sheets Address (published on web)</label>
                                    <textarea name="doc_google_sheets" id="full_address" cols="30" rows="5" class="form-control">{{ old('doc_google_sheets') ?? $data->doc_google_sheets }}</textarea>
                                    @if ($errors->has('doc_google_sheets'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('doc_google_sheets') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input group end -->
                            </div>
                        </div>
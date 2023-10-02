<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">DOCUMENTS (GOOGLE SHEETS)</h5>

<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="doc_google_sheets" class="form-label">Google Sheets Address (published on web)</label>
            <textarea name="doc_google_sheets" id="doc_google_sheets" cols="30" rows="5"
                class="form-control">{{ old('doc_google_sheets') ?? $data->student->doc_google_sheets ??'' }}</textarea>
            @if ($errors->has('doc_google_sheets'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{
                    $errors->first('doc_google_sheets') }}</small>
            </span>
            @endif
        </div>
        <!-- input group end -->

        <div id="doc_google_sheets">

            {!! $data->doc_google_sheets ?? '<div class="alert alert-info">
                <b><i class="fa-solid fa-info-circle"></i> Info!</b> Link google sheets belum ada. Silahkan lengkapi
                melalui form diatas.
            </div>' !!}

        </div>

        <button type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light mt-2">
            <i class="fa-solid fa-save mr-1"></i> Save
        </button>
        <!-- submit button end -->

    </div>

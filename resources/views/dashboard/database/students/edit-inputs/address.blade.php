<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">ADDRESS</h5>

<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="province_id" class="form-label">Province</label>
            <select class="custom-select" name="province_id">
                @foreach ($provinces as $province)
                <option value="{{ $province->id }}" @if($data->province_id == $province->id) Selected @endif>{{
                    $province->name ?? '' }}</option>
                @endforeach
            </select>
        </div>
        <!-- input group end -->

        <div class="mb-3">
            <label for="full_address" class="form-label">Full Address</label>
            <textarea name="full_address" id="full_address" cols="30" rows="5" class="form-control"
                placeholder="Full Address">{{ old('full_address') ?? $data->student->full_address ?? '' }}</textarea>
            @if ($errors->has('full_address'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('full_address')
                    }}</small>
            </span>
            @endif
        </div>
        <!-- input group end -->

    </div>
</div>

<button type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
    <i class="fa-solid fa-save mr-1"></i> Save
</button>
<!-- submit button end -->

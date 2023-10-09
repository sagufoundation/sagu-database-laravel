<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">CONTACT INFORMATION</h5>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="password" class="form-label"> Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password"  placeholder="*******" class="form-control">
            @if ($errors->has('password'))
                <span class="text-danger" role="alert">
                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>
        <!-- input group end -->
        
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmation Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="******" class="form-control">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger" role="alert">
                    <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password_confirmation') }}</small>
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

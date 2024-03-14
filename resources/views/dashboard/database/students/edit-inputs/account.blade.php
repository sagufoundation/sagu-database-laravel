<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">ACCOUNT</h5>

<div class="row">

    <div class="col-md-6">

        <div class="mb-3">
            <label for="old_password" class="form-label">Old Password <span class="text-danger">*</span></label>
            <input type="text" name="old_password" id="old_password" value="" placeholder="Old Password" class="form-control">
            @if ($errors->has('old_password'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('old_password')
                    }}</small>
            </span>
            @endif
        </div>
        <!-- input group end -->
        
        <div class="mb-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="text" name="new_password" id="new_password" value="" placeholder="New Password" class="form-control">
            @if ($errors->has('new_password'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('new_password')
                    }}</small>
            </span>
            @endif
        </div>
        <!-- input group end -->
        
        <div class="mb-3">
            <label for="new_password2" class="form-label">Confirm New Password</label>
            <input type="text" name="new_password2" id="new_password2" value="" placeholder="Confirm New Password" class="form-control">
            @if ($errors->has('new_password2'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('new_password2')
                    }}</small>
            </span>
            @endif
        </div>
        <!-- input group end -->
    </div>

</div>

<button type="submit" class="btn btn-lg btn-lg btn-primary waves-effect waves-light">
    <i class="fa-solid fa-save mr-1"></i> Save
</button>
<!-- submit button end -->

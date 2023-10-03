

<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PICTURE</h5>

<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <div class="mb-2">
                @if($data->picture)
                <img src="{{ asset($data->picture) }}" alt="Picture" id="preview-picture" class="img-thumbnail w-100">
                @else 
                <img src="{{ asset('images/students/00.jpg') }}" alt="Picture" id="preview-picture" class="img-thumbnail w-100">
                @endif
                
            </div>
            <label for="picture" class="form-label d-block">Picture <span class="text-danger">*</span></label>
            @if ($errors->has('picture'))
            <span class="text-danger" role="alert">
                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('picture') }}</small>
            </span>
            @endif
            <div class="custom-file">
                <input type="file" name="picture" class="custom-file-input" id="picture" accept="image/*">
    
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
    
        </div>
        <!-- input item end -->

        <button  type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
            <i class="fa-solid fa-save mr-1"></i> Save
        </button>
        <!-- submit button end --> 
    
    </div> <!-- ebd col -->
    
</div>
    





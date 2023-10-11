<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fa-solid fa-save mr-1"></i> Save
                </button>
                <!-- end item -->
    
                <a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" class="btn btn-lg btn-outline-primary">
                    <i class="fa-solid fa-reply"></i> Back to {{ ucfirst(Request::segment(2)) }} 
                </a>
                <!-- end item -->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-3">
                    <div class="button-list pe-xl-4 d-grid">
                        <a href="{{ url(Request::segment('1').'/'.Request::segment('2').'/edit', $data->id) }}" class="btn btn-lg btn-primary waves-effect waves-light">
                            <i class="fa-solid fa-save mr-1"></i> Ubah
                        </a>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
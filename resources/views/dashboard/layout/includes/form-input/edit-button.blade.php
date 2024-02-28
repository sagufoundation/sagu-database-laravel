<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <div class="">

                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit',Request::segment(4)) }}" class="btn btn-lg btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <!-- end item -->

                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" class="btn btn-lg btn-outline-primary">
                            <i class="fa-solid fa-reply"></i> Back to {{ ucfirst(Request::segment(2)) }}
                        </a>
                        <!-- end item -->
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>

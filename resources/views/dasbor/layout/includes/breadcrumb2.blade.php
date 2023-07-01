                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a></li>
                                            <li class="breadcrumb-item active">{{ ucfirst(Request::segment(2)) }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ ucfirst(Request::segment(2)) }}</h4>
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
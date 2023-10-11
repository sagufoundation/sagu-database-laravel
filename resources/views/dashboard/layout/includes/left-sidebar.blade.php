                                        <div class="inbox-leftbar">

                                            <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/create') }}" class="btn btn-lg py-2 btn-primary w-100 waves-effect waves-light mb-2">
                                                <i class="fa-solid fa-plus-square mr-1"></i> Create
                                            </a>

                                            <div class="list-group">
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == '') active @endif">
                                                    <i class="dripicons-star mr-1"></i> Publish 
                                                    <span class="badge @if(Request::segment(3) == '') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{$datapublish}}</span>
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/draft') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'draft') active @endif">
                                                    <i class="dripicons-document mr-1"></i> Draft 
                                                    <span class="badge @if(Request::segment(3) == 'draft') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{$jumlahdraft}}</span>
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/trash') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'trash') active @endif">
                                                    <i class="dripicons-trash mr-1"></i> Trash 
                                                    <span class="badge @if(Request::segment(3) == 'trash') badge-soft-light @else badge-soft-info @endif  float-end ms-2"> {{$jumlahtrash}}</span>
                                                </a>
                                            </div>

                                        </div>
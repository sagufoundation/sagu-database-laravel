                                        <div class="inbox-leftbar">

                                            <div class="mb-2">
                                                @if(!empty($data->picture))
                                                <img src="{{ asset('gambar/' . Request::segment(2) . '/' . $data->picture) }}" alt="Profile picture" class="img img-thumbnail img-fluid w-100 rounded p-2" id="preview-gambar">
                                                @else 
                                                <img src="{{ asset('gambar/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="img img-thumbnail w-100 rounded p-2" id="preview-gambar">
                                                @endif
                                            </div>

                                            <div class="my-3 text-center">

                                                <h5>
                                                    {{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}
                                                </h5>

                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2). '/show', $data->id )}}" class="btn btn-success btn-xs waves-effect waves-light">
                                                    <i class="fa-solid fa-id-badge"></i> Show
                                                </a>
                                            </div>

                                            <div class="list-group">
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/biography', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == '') active @endif">
                                                    <i class="fa-solid fa-user mr-1"></i> Biography 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/contact', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'draft') active @endif">
                                                    <i class="fa-solid fa-id-badge mr-1"></i> Contact 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/address', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'trash') active @endif">
                                                    <i class="fa-solid fa-map-marker mr-1"></i> Address
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/documents', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'trash') active @endif">
                                                    <i class="fa-solid fa-file-lines mr-1"></i> Documents
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/educations', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'trash') active @endif">
                                                    <i class="fa-solid fa-graduation-cap mr-1"></i> Educations
                                                </a>
                                            </div>

                                        </div>
                                        <div class="inbox-leftbar">

                                            <div class="mb-2">
                                                @if(!empty($data->picture))
                                                <img src="{{ asset($data->picture) }}" alt="Profile picture" class="img img-thumbnail img-fluid w-100 rounded p-2">
                                                @else 
                                                <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="img img-thumbnail w-100 rounded p-2">
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
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/biography', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'biography') active @endif">
                                                    <i class="fa-solid fa-user mr-1"></i> Biography 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/picture', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'picture') active @endif">
                                                    <i class="fa-solid fa-image mr-1"></i> Picture 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/profile', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'profile') active @endif">
                                                    <i class="fa-solid fa-id-card mr-1"></i> Profile 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/contact', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'contact') active @endif">
                                                    <i class="fa-solid fa-id-badge mr-1"></i> Contact 
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/address', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'address') active @endif">
                                                    <i class="fa-solid fa-map-marker mr-1"></i> Address
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/documents', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'documents') active @endif">
                                                    <i class="fa-solid fa-file-lines mr-1"></i> Documents
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/programs', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'programs') active @endif">
                                                    <i class="fa-solid fa-graduation-cap mr-1"></i> Programs
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/edit/educations', $data->id) }}" class="list-group-item list-group-item-action @if(Request::segment(4) == 'educations') active @endif">
                                                    <i class="fa-solid fa-graduation-cap mr-1"></i> Educations
                                                </a>
                                            </div>

                                        </div>
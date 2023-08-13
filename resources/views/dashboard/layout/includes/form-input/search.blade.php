                                            @if (request()->segment(3) == 'draft')
                                            <form action="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/draft') }}" method="get">
                                            @else
                                            <form action="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" method="get">
                                            @endif
                                                <div class="input-group mb-3">
                                                    <input type="search" name="s" class="form-control" placeholder="Search {{ ucfirst(Request::segment(2)) }}" value="{{ request()->s ?? '' }}">
                                                    <button type="submit" class="btn btn-primary">
                                                        <div class="fa-solid fa-search me-1"></div> Go!
                                                    </button>
                                                </div>
                                            </form>
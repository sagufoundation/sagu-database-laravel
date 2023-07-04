                    <td width="200px">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ $document->url ?? '' }}" target="_blank" class="btn btn-success border"><i class="fa-solid fa-file"></i></a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/delete', $data->id) }}" class="btn btn-light border show_confirm"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </td>
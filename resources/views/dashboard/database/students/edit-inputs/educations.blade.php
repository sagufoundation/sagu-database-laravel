                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">EDUCATION HISTORY</h5>

                        <div>
                            @include('dasbor.siswa.education.create-education-modal')
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#education-modal">
                                <i class="fa-solid fa-plus-square"></i> Add
                            </button>
                        </div> 

                        <div class="row">
                            <div class="col-md-12">                                
                                
                                <div class="table-responsive border">
                                    <table class="table table-borderles">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($educations as $education)
                                            <tr>
                                                <td>{{ $education->year ?? '' }}</td>
                                                <td>{{ $education->category ?? '' }}</td>
                                                <td>{{ $education->title ?? '' }}</td>
                                                <td>{{ $education->description ?? '' }}</td>
                                                <td class="d-flex">
                                                    <div class="mr-1">
                                                        <a href="{{ $education->url ?? '' }}" target="_blank" class="btn btn-sm btn-outline-success w-100 border" data-toggle="tooltip" title='Show'><i class="fa-solid fa-file"></i></a>
                                                    </div>
                                                    <div class="">
                                                        <form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/educations/destroy', $education->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger w-100 show_confirm" data-toggle="tooltip" title='Delete'> 
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td colspan="3">Data tidak ada</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
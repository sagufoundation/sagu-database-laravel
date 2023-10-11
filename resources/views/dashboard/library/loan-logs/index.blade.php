@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        {{-- ===================================== ADMINISTRATOR START ===================================== --}}
                        @if (Auth::user()->hasRole('administrator'))

                        <div class="row">
                            <div class="col-12">
                                <div class="card-header">
                                    <h3>Loan Logs</h3>
                                </div>
                                <div class="card">

                                    <div class="card-body">
                                        <div class="mt-3 table-responsive">
                                            <table class="table table-bordered">
                                                    <tr>
                                                        <th width="1%">No</th>
                                                        <th>Cover</th>
                                                        <th>Title</th>
                                                        <th>Categories</th>
                                                        <th>Author</th>
                                                        <th>Student</th>
                                                        <th>Status</th>
                                                        <th>Return Date</th>
                                                        <th width="180px"></th>
                                                    </tr>
                                                    @forelse($adminDatas as $data)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td style="width: 10rem">
                                                            <img src="{{ asset($data->book->cover) ?? '' }}" alt="Book Cover" class="w-50">
                                                        </td>
                                                        <td>{{ $data->book->title ?? '' }}</td>
                                                        <td>{{ $data->book->author->name ?? '' }}</td>
                                                        <td>{{ $data->book->category->name ?? '' }}</td>
                                                        <td>{{ $data->user->first_name ?? '' }} {{ $data->user->last_name ?? '' }}</td>
                                                        <td>
                                                            @if($data->status == 'Active')
                                                            <span class="text-success"><i class="fa fa-dot-circle text-success"></i> Active</span> 
                                                            @elseif($data->status == 'Pending')
                                                            <span class="text-warning"><i class="fa fa-dot-circle"></i> Pending</span>
                                                            @elseif($data->status == 'Returned')
                                                            <span class="text-dark"><i class="fa fa-dot-circle"></i> Returned</span>
                                                            @endif
                                                        </td>
                                                        {{-- <td>{{ $data->return_date ?? '' }}</td> --}}
                                                        <td>{{ Carbon\Carbon::parse($data->return_date)->format('d F Y') }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1">
                                                                <div class="d-block p-1">
                                                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" target="_blank" class="btn btn-success w-100">
                                                                        <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                    </a>
                                                                </div>
                                                                <div class="d-block p-1">
                                                                    <a class="btn btn-primary w-100" href="{{ url('dashboard/books/loan-logs/edit',  $data->id) }}">
                                                                        <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                                    </a>
                                                                </div>
                                                                <div class="d-block p-1">
                                                                    <form action="{{ url('dashboard/books/loan-logs/delete/' . $data->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger w-100">
                                                                            <i class="fa-solid fa-trash d-block"></i> Trash
                                                                        </button>
                                                                    </form>
                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="9">
                                                            No data
                                                        </td>
                                                    </tr>
                                                    @endforelse
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

                        @else

                        {{-- ===================================== USERS START ===================================== --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>My Loan Logs</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="inbox-leftbar">

                                            <div class="list-group">
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" class="list-group-item list-group-item-action @if(Request::segment(3) == '') active @endif">
                                                    <i class="dripicons-star mr-1"></i> Pending 
                                                    <span class="badge @if(Request::segment(3) == '') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{ '1' }} </span>
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/draft') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'draft') active @endif">
                                                    <i class="dripicons-star mr-1"></i> Active 
                                                    <span class="badge @if(Request::segment(3) == 'draft') badge-soft-light @else badge-soft-info @endif float-end ms-2"> {{ '2' }} </span>
                                                </a>
                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/trash') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'trash') active @endif">
                                                    <i class="dripicons-star mr-1"></i> Returned 
                                                    <span class="badge @if(Request::segment(3) == 'trash') badge-soft-light @else badge-soft-info @endif  float-end ms-2"> {{ '3' }} </span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="inbox-rightbar">
                                            
                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered">
                                                        <tr>
                                                            <th width="1%">No</th>
                                                            <th>Cover</th>
                                                            <th>Title</th>
                                                            <th>Categories</th>
                                                            <th>Author</th>
                                                            <th>Duration</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                        @forelse($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td style="width: 12rem">
                                                                <img src="{{ asset($data->book->cover) ?? '' }}" alt="Book Cover" class="w-100">
                                                            </td>
                                                            <td>{{ $data->book->title ?? '' }}</td>
                                                            <td>{{ $data->book->category->name ?? '' }}</td>
                                                            <td>{{ $data->book->author->name ?? '' }}</td>
                                                            <td>{{ $data->return_date ?? '-' }}</td>
                                                            <td>
                                                                @if($data->status == 'Active')
                                                                <span class="text-success"><i class="fa fa-dot-circle text-success"></i> Active</span> @else
                                                                <span class="text-warning"><i class="fa fa-dot-circle"></i> Pending</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="d-block p-1">
                                                                    <form action="{{ url('dashboard/books/loan-logs/delete/' . $data->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger w-100">
                                                                            <i class="fa-solid fa-trash d-block"></i> Trash
                                                                        </button>
                                                                    </form>
                                                                </div>                                                            
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="8">
                                                                No data
                                                            </td>
                                                        </tr>
                                                        @endforelse
                                                </table>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

@stop

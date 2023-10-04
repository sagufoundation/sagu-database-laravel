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
                                                        <td>{{ $data->user->first_name ?? '' }}</td>
                                                        <td>
                                                            @if($data->status == 'Active')
                                                            <span class="text-success"><i class="fa fa-dot-circle text-success"></i> Active</span> @else
                                                            <span class="text-warning"><i class="fa fa-dot-circle"></i> Pending</span>
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
                                                                    <form action="{{ url('dashboard/book/loan-logs/delete/' . $data->id) }}" method="POST">
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
                                                        <td colspan="8">
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
                                <div class="card-header">
                                    <h3>My Loan Logs</h3>
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
                                                        <th>Duration</th>
                                                        <th>Status</th>
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
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

                        @endif

@stop

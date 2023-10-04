@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        {{-- ===================================== ADMINISTRATOR START ===================================== --}}
                        @if (Auth::user()->hasRole('administrator'))

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Left sidebar -->
                                        @include('dashboard.layout.includes.left-sidebar')
                                        <!-- End Left sidebar -->

                                        <div class="inbox-rightbar">

                                            @include('dashboard.layout.includes.form-input.search')

                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered">
                                                        <tr>
                                                            <th width="1%">No</th>
                                                            <th>Name</th>
                                                            <th>Books</th>
                                                            <th width="280px"></th>
                                                        </tr>
                                                        @forelse($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ $data->name ?? '' }} </td>
                                                            <td>
                                                                @foreach ($data->books as  $book)
                                                                    <ul>
                                                                        <li>
                                                                            {{ $book->title ?? '' }}
                                                                        </li>
                                                                    </ul>
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                <div class="d-flex gap-1">
                                                                    <div class="d-block p-1">
                                                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" target="_blank" class="btn btn-success w-100">
                                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-block p-1">
                                                                        <a class="btn btn-primary w-100" href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit',  $data->id) }}">
                                                                            <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-block p-1">
                                                                        <form action="{{ url(Request::segment(1).'/'.Request::segment(2), $data->id) }}" method="POST">
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
                                            <!-- end .mt-4 -->
                                            {!! $datas->links() !!}
                                        </div>
                                        <!-- end inbox-rightbar-->

                                        <div class="clearfix"></div>
                                        </div>

                                    </div> <!-- end card-->
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

                        @else

                        {{-- ===================================== USERS START ===================================== --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div>
                                            @include('dashboard.layout.includes.form-input.search')

                                            <div class="row">
                                                @forelse($datas as $data)
                                                <div class="col-lg-3">
                                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}">

                                                        <div class="card border shadow">
                                                            <img src="{{ asset($data->cover) }}" alt="cover" class="card-img-top">
                                                            <div class="card-body">
                                                                <h4>{{ $data->title ?? '' }}</h4>
                                                            </div>
                                                        </div>

                                                    </a>
                                                </div>
                                                @empty
                                                <div class="col-lg-3">
                                                    No data
                                                </div>
                                                @endforelse
                                            </div>
                                            {!! $datas->links() !!}
                                        </div>

                                        <div class="clearfix"></div>
                                        </div>

                                    </div> <!-- end card-->
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

                        @endif

@stop

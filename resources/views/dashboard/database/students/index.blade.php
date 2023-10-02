@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

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
                                                            <th>Picture</th>
                                                            <th>Full Name</th>
                                                            <th>Phone</th>
                                                            <th>Province</th>
                                                            <th>Program</th>
                                                            <th width="280px"></th>
                                                        </tr>
                                                        @forelse($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            @include('dashboard.layout.includes.index-picture')
                                                            <td>
                                                                {{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}
                                                                <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i> {{ $data->email_sagu ?? '' }}</small>
                                                            </td>
                                                            <td>{{ $data->phone ?? '' }}</td>
                                                            <td>{{ $data->student->provinces->name ?? '' }}</td>
                                                            <td>

                                                                @foreach ($data->student->program as $program)
                                                                    <ul>
                                                                        <li> {{ $program->program_title ?? '' }}</li>
                                                                    </ul>
                                                                @endforeach

                                                            </td>
                                                            <td>
                                                                <div class="d-flex gap-1">
                                                                    <div class="d-block p-1">
                                                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="btn btn-success w-100">
                                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-block p-1">
                                                                        <a class="btn btn-primary w-100" href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit/biography',  $data->id) }}">
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
                                                                Data tidak ada
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        @include('dashboard.layout.includes.form-input.search')

                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered">
                                                        <tr>
                                                            <th width="1%">No</th>
                                                            <th>Picture</th>
                                                            <th>Full Name</th>
                                                            <th>Phone</th>
                                                            <th>Province</th>
                                                            <th>Program</th>
                                                            <th width="280px"></th>
                                                        </tr>
                                                        @forelse($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            @include('dashboard.layout.includes.index-picture')
                                                            <td>
                                                                {{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}
                                                                <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i> {{ $data->email_sagu ?? '' }}</small>
                                                            </td>
                                                            <td>{{ $data->phone ?? '' }}</td>
                                                            <td>{{ $data->provinces->name ?? '' }}</td>
                                                            <td>{{ $data->program->program_title ?? '' }}</td>
                                                            <td>
                                                                <div class="d-flex gap-1">
                                                                    <div class="d-block p-1">
                                                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="btn btn-success w-100">
                                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="6">
                                                                Data tidak ada
                                                            </td>
                                                        </tr>
                                                        @endforelse
                                                </table>
                                            </div>
                                            <!-- end .mt-4 -->
                                            {!! $datas->links() !!}

                                        <div class="clearfix"></div>
                                        </div>

                                    </div> <!-- end card-->
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

                        @endif

@stop

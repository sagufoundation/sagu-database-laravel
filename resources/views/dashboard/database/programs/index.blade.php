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
                                        <th class="text-center" width="1%">No</th>
                                        <th>Program Title</th>
                                        <th>Short Description</th>
                                        <th class="text-center">Year</th>
                                        <th class="text-center">Total Students</th>
                                        <th width="280px"></th>
                                    </tr>
                                    @forelse($datas as $data)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
                                            <td>{{ $data->program_title ?? '' }} </td>
                                            <td>{{ $data->short_description ?? '' }} </td>
                                            <td class="text-center">{{ $data->program_year ?? '' }} </td>
                                            <td class="text-center"> {{ $data->students->count() }}</td>
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <div class="d-block p-1">
                                                        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/show', $data->id) }}"
                                                             class="btn btn-success w-100">
                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                        </a>
                                                    </div>
                                                    <div class="d-block p-1">
                                                        <a class="btn btn-primary w-100"
                                                            href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/edit', $data->id) }}">
                                                            <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                        </a>
                                                    </div>
                                                    <div class="d-block p-1">
                                                        <form
                                                            action="{{ url(Request::segment(1) . '/' . Request::segment(2), $data->id) }}"
                                                            method="POST">
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="mt-3 table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="1%">No</th>
                                <th>Program Title</th>
                                <th>Short Description</th>
                                <th>Total Student</th>
                                <th></th>
                            </tr>
                            @forelse($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->program_title ?? '' }} </td>
                                    <td>{{ $data->short_description ?? '' }} </td>
                                    <td class="text-center"> {{ $data->students->count() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <div class="d-block p-1">
                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/show', $data->id) }}"
                                                     class="btn btn-success w-100">
                                                    <i class="fa-solid fa-id-badge d-block"></i> Show
                                                </a>
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

                    <div class="clearfix"></div>
                </div>

            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    </div>
    <!-- .row end -->

    @endif

@stop

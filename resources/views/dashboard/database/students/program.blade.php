@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/' . Request::segment(2)) }}">{{ ucfirst(Request::segment(2)) }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ $program->program_title }}
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">{{ ucfirst(Request::segment(2)) }} Program {{ $program->program_title }}</h4>
            </div>
        </div>
    </div>
    <!-- .row end -->


    @if (Auth::user()->hasRole('administrator'))
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
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
                                        @php
                                            $students = $data->students ?? '';
                                        @endphp
                                        @forelse ($students as $student)
                                            @if($student->users)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    @include('dashboard.layout.includes.index-picture')
                                                    <td>

                                                        {{ $student->users->first_name . ' ' . $student->users->middle_name . ' ' . $student->users->last_name ?? '' }}
                                                        <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i>
                                                            {{ $student->users->email ?? '' }}</small>
                                                    </td>
                                                    <td>{{ $student->users->phone ?? '' }}</td>

                                                    <td>
                                                        {{ $student->provinsi->name ?? '' }}
                                                    </td>
                                                    <td>
                                                        <div class="badge border">
                                                            {{ $data->program_title ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-1">
                                                            <div class="d-block p-1">
                                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/show', $student->users->id) }}"
                                                                    class="btn btn-success w-100">
                                                                    <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                </a>
                                                            </div>
                                                            <div class="d-block p-1">
                                                                <a class="btn btn-primary w-100"
                                                                    href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/edit/profile', $student->users->id) }}">
                                                                    <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                                </a>
                                                            </div>
                                                            <div class="d-block p-1">
                                                                <form
                                                                    action="{{ url(Request::segment(1) . '/' . Request::segment(2), $student->users->id) }}"
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
                                            @endif
                                        @empty
                                            <tr>
                                                <td colspan="8">
                                                    Data tidak ada
                                                </td>
                                            </tr>
                                        @endforelse
                                    @endforeach
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
                                    @php
                                        $students = $data->students ?? '';
                                    @endphp
                                    @forelse ($students as $student)
                                        @if($student->users)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    @include('dashboard.layout.includes.index-picture')
                                                    <td>

                                                        {{ $student->users->first_name . ' ' . $student->users->middle_name . ' ' . $student->users->last_name ?? '' }}
                                                        <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i>
                                                            {{ $student->users->email ?? '' }}</small>
                                                    </td>
                                                    <td>{{ $student->users->phone ?? '' }}</td>

                                                    <td>
                                                        {{ $student->provinsi->name ?? '' }}
                                                    </td>
                                                    <td>
                                                        <div class="badge border">
                                                            {{ $data->program_title ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-1">
                                                            <div class="d-block p-1">
                                                                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/show', $student->users->id) }}"
                                                                    class="btn btn-success w-100">
                                                                    <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="8">
                                                Data tidak ada
                                            </td>
                                        </tr>
                                    @endforelse
                                @endforeach
                            </table>
                        </div>
                        <!-- end .mt-4 -->
                        {{-- {!! $datas->students->links() !!} --}}
                        <div class="clearfix"></div>
                    </div>

                </div> <!-- end card-->
            </div> <!-- end col -->

        </div>
        </div>
        <!-- .row end -->
    @endif

@stop

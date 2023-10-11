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
                                                            <th>Cover</th>
                                                            <th>Title</th>
                                                            <th>Author</th>
                                                            <th>Categories</th>
                                                            <th width="280px"></th>
                                                        </tr>
                                                        @forelse($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td width="150px">
                                                                <img src="{{ asset($data->cover) }}" alt="Book Cover" class="w-100">
                                                            </td>
                                                            <td>{{ $data->title ?? '' }} </td>
                                                            <td>{{ $data->author->name ?? '' }}</td>
                                                            <td>{{ $data->category->name ?? '' }}</td>
                                                            <td>
                                                                <div class="d-flex gap-1">
                                                                    <div class="d-block p-1">
                                                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="btn btn-success w-100">
                                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-block p-1">
                                                                        <a class="btn btn-primary w-100" href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit/profile',  $data->id) }}">
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

                        @elseif (Auth::user()->hasRole('student'))

                        {{-- ===================================== USERS/STUDENT START ===================================== --}}

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            @include('dashboard.layout.includes.form-input.search')
                                            <div class="row">
                                                @forelse($datas as $data)
                                                <div class="col-lg-3">
                                                    
                                                        <div class="card border shadow">
                                                            <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}">
                                                                <img src="{{ asset($data->cover) }}" alt="cover" class="card-img-top">
                                                            </a>
                                                            <div class="card-body">
                                                                <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="link-primary">
                                                                    <h4 class="h3 text-primary">{{ $data->title ?? '' }}</h4>
                                                                </a>
                                                                
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        By <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/categories', $data->category->slug) }}" class="text-secondary font-weight-bold"> {{ $data->author->name ?? '' }} </a>
                                                                    </div>
                                                                    <div>
                                                                        Category: <a href="" class="text-secondary font-weight-bold"> {{ $data->category->name ?? '' }} </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
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
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- row end -->

                        @endif
@stop

@extends('dasbor.layout.app')
@section('content')

                        @include('dasbor.layout.includes.breadcrumb2')

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <!-- Left sidebar -->
                                        @include('dasbor.layout.includes.left-sidebar')
                                        <!-- End Left sidebar -->

                                        <div class="inbox-rightbar">

                                            @include('dasbor.layout.includes.form-input.search')

                                            <div class="mt-3 table-responsive">
                                                <table class="table table-bordered">
                                                        <tr>
                                                            <th width="1%">No</th>
                                                            <th>Picture</th>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th width="280px">Action</th>
                                                        </tr>
                                                        @forelse($datas as $data) 
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            @include('dasbor.layout.includes.index-picture') 
                                                            <td>{{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}</td>
                                                            <td>{{ $data->email_google ?? '' }}</td>
                                                            <td>{{ $data->status ?? '' }}</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4 p-1">
                                                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="btn btn-success w-100">
                                                                            <i class="fa-solid fa-id-badge d-block"></i> Show
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4 p-1">
                                                                        <a class="btn btn-primary w-100" href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit/profile',  $data->id) }}">
                                                                            <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4 p-1">
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
                                                            <td colspan="6">
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

@stop

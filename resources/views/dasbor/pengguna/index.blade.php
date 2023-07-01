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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th width="280px">Action</th>
                                                        </tr>
                                                        @foreach ($datas as $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            @include('dasbor.layout.includes.index-picture')                                        
                                                            <td>
                                                                {{ $data->name ?? '' }}
                                                                <small class="d-block text-muted">
                                                                    {{ $data->job_title ?? '' }}
                                                                </small>
                                                            </td>
                                                            <td>{{ $data->email ?? '' }}</td>
                                                            <td>{{ $data->status ?? '' }}</td>
                                                            @include('dasbor.layout.includes.index-action')
                                                        </tr>
                                                        @endforeach
                                                </table>
                                            </div>
                                            <!-- end .mt-4 -->

                                            {!! $datas->links() !!}
                                            <!-- end row-->
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

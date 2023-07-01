@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst(Request::segment(2)) }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ ucfirst(Request::segment(2)) }}</h4>
        </div>
    </div>
</div>
<!-- .row end -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <!-- Left sidebar -->
                    @include('dasbor.layout.includes.left-sidebar')
                    <!-- End Left sidebar -->

                    <div class="inbox-rightbar">
                        @if (request()->segment(3) == 'draft')
                        <form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/draft') }}" method="get">
                        @else
                        <form action="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" method="get">
                        @endif
                            <div class="input-group mb-3">
                                <input type="search" name="s" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

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
                                        <td>{{ $data->name ?? '' }}</td>
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

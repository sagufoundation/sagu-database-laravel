@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <p>Roles are used to manage and control user access to various features, functions, and data on the website. We use roles to help ensure users only have the privileges necessary to perform their specific tasks and responsibilities, while also maintaining security and data integrity.</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="1%">No</th>
                            <th>Name</th>
                            <th>Description</th>
                            {{-- <th width="280px"></th> --}}
                        </tr>
                        @forelse($datas as $data)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $data->display_name ?? '' }} </td>
                            <td>{{ $data->description ?? '' }} </td>
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
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>

        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
</div>
<!-- .row end -->


@stop

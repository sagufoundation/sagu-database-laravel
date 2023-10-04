@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb2')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('dashboard.layout.includes.form-input.search')
                <div class="mt-3 table-responsive">
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

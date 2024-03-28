@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Left sidebar -->
                @include('dashboard.layout.includes.left-sidebar')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Group Title</th>
                                <th width="280px">Options</th>
                            </tr>
                            @if(!$datas->isEmpty())

                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->group_title ?? '' }}</td>
                                @include('dashboard.layout.includes.trash-action')
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3">
                                    Empty!
                                </td>
                            </tr>
                            @endif
                        </table>

                    </div>
                    {!! $datas->links() !!}
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>
<!-- end row -->
@stop

@push('script-footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          swal.fire({
            title: 'Are you sure?',
            text: "This data will be deleted permantently!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Just delete!'
          })
          .then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
                )
            }
        });
      });
</script>

@endpush

@extends('layouts.base_panel')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Slider</li>
                </ol>
            </div>
            <h4 class="page-title">Slider</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                <div class="inbox-leftbar">

                    <a href="{{ url('app/slider/create') }}"
                        class="btn btn-danger w-100 waves-effect waves-light mb-2"><i
                            class="mdi mdi-plus-circle me-2"></i> Tambah data</a>

                    <div class="mail-list mt-4">


                        <a href="{{ url('app/slider/draft') }}"><i class="dripicons-document me-2"></i>Draft<span
                                class="badge badge-soft-info float-end ms-2">{{$jumlahdraft}}</span></a>

                        <a href="{{ url('app/slider/trash') }}"><i class="dripicons-trash me-2"></i>Trash <span
                                class="badge badge-soft-info float-end ms-2">{{$jumlahtrash}}</span></a>

                    </div>



                </div>
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    <form action="{{ url('app/slider') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>



                    <div class="mt-3">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sub title</th>
                                <th>Status</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img src="{{ url('storage/resource/sliders') }}/{{ $data->image}}" width="100px">
                                </td>
                                <td>{{Str::limit($data->title, 20)}}</td>
                                <td>{{Str::limit($data->subtitle, 20)}}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <form action="{{ url('app/slider',$data->id) }}" method="POST">



                                        <a class="btn btn-primary"
                                            href="{{ url('app/slider/'.$data->id.'/edit') }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
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


<!-- end row -->

<!--end wrapper-->

@stop

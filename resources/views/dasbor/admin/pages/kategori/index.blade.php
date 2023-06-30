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
                    <li class="breadcrumb-item active">kategori</li>
                </ol>
            </div>
            <h4 class="page-title">Kategori</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                @include('panel.admin.pages.kategori.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    <form action="{{ url('app/kategori') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>



                    <div class="mt-3">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>

                                <th>Title</th>


                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{Str::limit($data->title, 20)}}</td>

                                <td>
                                    <form action="{{ url('app/kategori',$data->id) }}" method="POST">



                                        <a class="btn btn-primary"
                                            href="{{ url('app/kategori/'.$data->id.'/edit') }}">Edit</a>

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

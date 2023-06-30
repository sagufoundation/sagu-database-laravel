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
                    <li class="breadcrumb-item active">FAQ</li>
                </ol>
            </div>
            <h4 class="page-title">FAQ</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                @include('panel.admin.pages.faq.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    @if (request()->segment(3) == 'draft')
                    <form action="{{ url('app/faq/draft') }}" method="get">
                        @else
                        <form action="{{ url('app/faq') }}" method="get">
                            @endif
                            <div class="input-group mb-3">
                                <input type="search" name="s" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>



                        <div class="mt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{Str::limit($data->pertanyaan, 20)}}</td>
                                    <td>{!! Str::limit($data->jawaban, 20) !!}</td>

                                    <td class="text-center">
                                        <form action="{{ url('app/faq',$data->id) }}" method="POST">
                                            <a class="btn btn-sm btn-dark"
                                                href="{{ url('app/faq/'.$data->slug.'/detail') }}">
                                                <i class="fe-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-outline-dark"
                                                href="{{ url('app/faq/'.$data->slug.'/edit') }}">
                                                <i class="fe-edit"></i>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-dark">Delete</button>
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

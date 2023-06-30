@extends('dasbor.layout.app')
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
                    <li class="breadcrumb-item active">Halaman</li>
                </ol>
            </div>
            <h4 class="page-title">Halaman</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                @include('dasbor.admin.pages.halaman.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">
                    @if (request()->segment(3) == 'draft')
                    <form action="{{ url('dasbor/halaman/draft') }}" method="get">
                        @else
                        <form action="{{ url('dasbor/halaman') }}" method="get">
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
                                    <th>Thumbnail</th>
                                    <th>Judul Halaman</th>
                                    <th>Konten</th>
                                    <th>Author</th>
                                    <th>Slug</th>
                                    <th class="text-center" width="210px">Opsi</th>
                                </tr>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        @if(!$data->gambar_cover)
                                        <img src="{{ asset('assets/admin/assets/images/image-not.png') }}"
                                            class="img-thumbnail" width="40px" alt="Picture">
                                        @else
                                        <img src="{{ asset('file/halaman')}}/{{($data->gambar_cover) }}"
                                            class="img-thumbnail" width="60px" alt="Picture">
                                        @endif
                                    </td>
                                    <td>{{Str::limit($data->judul_halaman, 20)}}</td>
                                    <td>{!! Str::limit($data->konten, 20) !!}</td>
                                    <td>{{ $data->user->name ?? '' }}</td>
                                    <td>{{ $data->slug }}</td>


                                    <td class="text-center">
                                        <form action="{{ url('dasbor/halaman',$data->id) }}" method="POST">
                                            <a class="btn btn-sm btn-dark"
                                                href="{{ url('dasbor/halaman/'.$data->slug.'/detail') }}">
                                                <i class="fe-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-dark"
                                                href="{{ url('dasbor/halaman/'.$data->slug.'/edit') }}">
                                                <i class="fe-edit"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
</div>

<!-- end row -->

<!--end wrapper-->

@stop

@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div>
            <h4 class="page-title">Kategori</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Left sidebar -->
                @include('dasbor.author.kategori.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    <form action="{{ route('dasbor.kategori') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                        </div>
                    </form>
                    <!-- form end -->

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            <th class="text-center"></th>
                        </tr>
                        @foreach ($datas as  $data)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>
                                <a href="{{ url('berita/kategori', $data->kategori_slug) }}" target="_blank">{{ $data->name }}</a>
                            </td>
                            <td> {{ $data->deskripsi }} </td>
                            <td> {{ $data->user->name ?? '' }} </td>
                            <td> {{ $data->status }} </td>
                            <td class="text-center">
                                <form action="{{ url('dasbor/berita/kategori', $data->id) }}" method="POST">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/kategori/' . $data->kategori_slug . '/detail') }}"><i class="fe-eye"></i> Detail</a>
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/kategori/' . $data->kategori_slug . '/edit') }}"><i class="fe-edit"></i> Ubah</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item bg-danger text-light"><i class="fe-trash"></i> Hapus</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $datas->render() !!}
                    <!-- end row-->
                </div>
                <!-- End inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@stop

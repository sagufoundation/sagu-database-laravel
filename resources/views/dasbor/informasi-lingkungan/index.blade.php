@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Informasi Lingkungan</li>
                </ol>
            </div>
            <h4 class="page-title">Informasi Lingkungan</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                @include('dasbor.informasi-lingkungan.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">
                    @if (request()->segment(3) == 'draft')
                    <form action="{{ url('dasbor/informasi-lingkungan/draft') }}" method="get">
                        @else
                        <form action="{{ url('dasbor/informasi-lingkungan') }}" method="get">
                            @endif
                            <div class="input-group mb-3">
                                <input type="search" name="s" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Keterangan Singkat</th>
                                    <th>URL</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th class="text-center"></th>
                                </tr>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        @if(empty($data->gambar))
                                        <img src="{{ asset('gambar/informasi-lingkungan/00.jpg') }}" class="img-thumbnail" alt="Gambar" width="200px">
                                        @else
                                        <a href="{{ asset('gambar/informasi-lingkungan/' . $data->gambar) }}" target="_blank">
                                            <img src="{{ asset('gambar/informasi-lingkungan/' . $data->gambar) }}" class="img-thumbnail" alt="Gambar" width="200px">
                                        </a>
                                        @endif
                                    </td>
                                    <td>{{ $data->judul ?? '' }}</td>
                                    <td>{{ $data->keterangan_singkat ?? '' }}</td>

                                    <td>
                                       <a href="{{ url($data->url) }}" target="_blank"> {{ $data->url ?? '' }}</a>
                                    </td>
                                    <td> {{ $data->user->name ?? '' }} </td>
                                    <td>{{ $data->status ?? '' }}</td>

                                    <td class="text-center">
                                        <form action="{{ url('dasbor/informasi-lingkungan', $data->id) }}" method="POST">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opsi <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('dasbor/informasi-lingkungan/' . $data->slug.'/detail') }}"> <i class="fe-eye"></i> Detail </a>
                                                    <a class="dropdown-item" href="{{ url('dasbor/informasi-lingkungan/' . $data->slug.'/edit') }}"> <i class="fe-edit"></i> Ubah </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item bg-danger text-light"> <i class="fe-trash"></i> Hapus </button>
                                                </div>
                                            </div>
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

@stop

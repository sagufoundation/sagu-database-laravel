@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Revisi</li>
                </ol>
            </div>
            <h4 class="page-title">Revisi Berita</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Left sidebar -->
                @include('dasbor.author.berita.menu')
                <!-- End Left sidebar -->


                <div class="inbox-rightbar">
                    <form action="{{ url('app/berita') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Revisi Oleh</th>
                            <th>Ket</th>
                            <th class="text-center" width="180px">Opsi</th>
                        </tr>
                        @foreach ($datas as  $berita)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <th>
                                @if (empty($berita->gambar))
                                <img src="{{ asset('gambar/berita/00.jpg') }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                @else
                                <a href="{{ asset('gambar/berita/' . $berita->gambar) }}" target="_blank">
                                    <img src="{{ asset('gambar/berita/' . $berita->gambar) }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                </a>
                                @endif
                            </th>
                            <td>
                                {{ Str::limit($berita->judul, 20) }}
                            </td>

                            <th> {{ $berita->author->name }} </th>
                            <td>
                                {{ $berita->ket_revisi ?? 'N/A' }}
                            </td>

                            <td class="text-center">

                                <a class="btn btn-sm btn-dark" href="{{ route('dasbor.berita.show',$berita->slug) }}">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-light" href="{{ route('dasbor.berita.edit',$berita->slug) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                @if(Auth::user()->hasRole(['administrator','author']))
                                <a class="btn btn-sm btn-light" href="{{ route('dasbor.berita.edit',$berita->slug) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['dasbor.berita.destroy', $berita->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-danger']) !!}
                                 {!! Form::close() !!}
                                @endif


                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$berita->id}}">
                                    <i class="mdi mdi-trash-can text-danger"></i>
                                </a> --}}

                            </td>
                        </tr>


                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $datas->render() !!}
                    <!-- end row-->
                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@stop

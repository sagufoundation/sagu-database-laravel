@extends('layouts.base_panel')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>

                    <li class="breadcrumb-item active">Pengajuan</li>
                </ol>
            </div>
            <h4 class="page-title">Pengajuan Pertanyaan</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                 <!-- Left sidebar -->
                 @include('panel.admin.pages.pengajuan.menu')
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
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>No Telf</th>
                            <th>Topik</th>
                            <th>Ket</th>
                            <th class="text-center" width="190px">Opsi</th>
                        </tr>
                        @foreach ($datas as $pengajuan)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $pengajuan->nama }}
                                <small><a href="mailto:{{ $pengajuan->email }}">{{ $pengajuan->email }}</a></small>
                            </td>
                            <td>{{ $pengajuan->no_telf }}</td>
                            <td>{{ $pengajuan->judul_topik }}</td>
                            <td>{{ Str::limit($pengajuan->keterangan,30 ) }}</td>
                            <td class="text-center">

                                <a class="btn btn-sm btn-dark" href="{{ route('app.pengajuan.show',$pengajuan->slug) }}">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['app.pengajuan.destroy', $pengajuan->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-outline-dark']) !!}
                                 {!! Form::close() !!}
                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$pengajuan->id}}">
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

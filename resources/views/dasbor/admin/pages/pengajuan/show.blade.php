@extends('layouts.base_panel')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pengajuan</li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail Pengajuan Pertanyaan</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ $data->nama }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Email</label>
                            <input type="text" class="form-control" value="{{ $data->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Nomor Telfon</label>
                            <input type="text" class="form-control" value="{{ $data->no_telf }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="product-name" class="form-label">Judul Topik</label>
                    <input type="text" class="form-control" value="{{ $data->judul_topik }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="product-konten" class="form-label">Keterangan</label>
                    <textarea name="konten" class="ckeditor form-control" rows="10" readonly>{{ $data->keterangan}}</textarea>
                </div>

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->
<div class="row">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('app.pengajuan') }}" class="btn btn-light">
                <i class="mdi mdi-arrow-left"></i>Kembali
            </a>
        </div>
    </div>
</div>
@stop

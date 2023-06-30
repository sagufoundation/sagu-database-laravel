@extends('dasbor.layout.app')
@section('content')

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dasbor/berita/kategori') }}">Kategori</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tambah</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('dasbor.kategori.store')}}" method="POST">
        @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="name" class="form-label">Judul Kategori <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Judul Kategori">
                                    @if ($errors->has('name'))
                                    <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('name') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Kategori">{{ old('deskripsi') }}</textarea>
                                    @if ($errors->has('deskripsi'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('deskripsi') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="name" class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="" hidden>Pilih</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('status') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                            <i class="fe-save"></i> Simpan
                        </button>
                        <a href="{{ route('dasbor.kategori') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                            <i class="fe-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- row end -->

        </form> <!-- end form -->

@stop

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
                        <li class="breadcrumb-item active">Ubah</li>
                    </ol>
                </div>
                <h4 class="page-title">Ubah</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('dasbor.kategori.update',['id' => $data->id])}}" method="POST">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name" class="form-label">Judul Kategori <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ old('name',$data->name) }}">
                        </div>
                        <!-- input item end -->

                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="5">{{ old('deskripsi',$data->deskripsi) }}</textarea>
                        </div>
                        <!-- input item end -->

                        <div class="form-group">
                            <label for="status" class="form-label">Status {{$data->status}} </label>
                            <select name="status" class="form-control">
                                <option value="" hidden>Pilih</option>
                                <option value="Draft" @if($data->status == 'Draft') Selected @endif>Draft</option>
                                <option value="Publish" @if($data->status == 'Publish') Selected @endif>Publish</option>
                            </select>
                        </div>
                        <!-- input item end -->                          
                        
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- row end -->

        <div class="row mb-3">
            <div class="col">
                <div class="card-box">
                    <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="fe-save"></i> Simpan
                    </button>
                    <a href="{{ url('dasbor/kategori/' . $data->slug . '/detail')  }}" class="btn btn-lg btn-light waves-effect waves-light border">
                        <i class="fe-eye mr-1"></i> Detail
                    </a>
                    <a href="{{ url('dasbor/kategori') }}" class="btn btn-light waves-effect waves-light border">
                        <i class="fe-arrow-left"></i> Kembali
                    </a>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- row end -->

    </form> <!-- end form -->

@stop

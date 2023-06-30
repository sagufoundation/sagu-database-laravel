<form action="{{ route('dasbor.akunsaya.update',['id' => auth()->user()->id]) }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-edit mr-1"></i>Edit Profil</h5>
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
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstname">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" value="{{ old('name',auth()->user()->name) }}"
                placeholder="Masukan Nama Anda" required>
                @if ($errors->has('name'))
                    <span class="text-danger" role="alert">
                        <small>{{ $errors->first('name') }}</small>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lastname">Email</label>
                <input type="email" class="form-control" name="email"  value="{{ old('email',auth()->user()->email) }}"
                placeholder="Masukan Email Anda" required>
                @if ($errors->has('email'))
                    <span class="text-danger" role="alert">
                        <small>{{ $errors->first('email') }}</small>
                    </span>
                @endif
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label for="pic">Foto Profil</label>
            @if ($errors->has('picture'))
                <span class="text-danger" role="alert">
                    <small>{{ $errors->first('picture') }}</small>
                </span>
            @endif
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="picture" accept="image/*">
                    <label class="custom-file-label" for="picture">Pilih Foto Profil</label>
                </div>
            </div>
        </div>
    </div> <!-- end row -->

    <div class="text-right">
        <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
            <i class="mdi mdi-content-save"></i> Simpan
        </button>
    </div>
</form>

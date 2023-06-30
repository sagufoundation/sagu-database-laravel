<form action="{{ route('dasbor.akunsaya.changePassword') }}" method="POST">
    @csrf
    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-lock mr-1"></i>Ganti kata sandi</h5>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="password">Kata sandi lama</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="current_passsowrd" placeholder="Enter" required>
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                @if ($errors->has('current_passsowrd'))
                    <span class="text-danger" role="alert">
                        <small>{{ $errors->first('current_passsowrd') }}</small>
                    </span>
                @endif
            </div>
        </div>
    </div> <!-- end row -->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="userpassword">Kata sandi baru</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="password" placeholder="Enter" required>
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                    @if ($errors->has('password'))
                        <span class="text-danger" role="alert">
                            <small>{{ $errors->first('password') }}</small>
                        </span>
                    @endif
                <span class="form-text text-muted"><small>Kata Sandi minimal 8 Karakter</small></span>
            </div>
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="userpassword">Konfirmasi Kata sandi baru</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter" required>
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger" role="alert">
                        <small>{{ $errors->first('password_confirmation') }}</small>
                    </span>
                @endif
            </div>
        </div> <!-- end col -->
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
    </div>
</form>

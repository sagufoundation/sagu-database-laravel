<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $pengaturan->site_title ?? 'SAGU Foundation' }}</title>

    <meta property="og:title" content="{{ $pengaturan->site_title ?? '' }}">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $pengaturan->logo_meta ?? '' }}">
    <meta property="og:url" content="{{ $pengaturan->site_address ?? '' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="{{ $pengaturan->logo_meta ?? '' }}">
    <meta property="og:description" content="{{ $pengaturan->meta_description ?? '' }}">
    <meta property="og:site_name" content="{{ $pengaturan->site_title ?? '' }}">
    <meta name="twitter:image:alt" content="Cover {{ $pengaturan->site_title ?? 'SAGU Foundation' }}">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" href="{{ asset('images/settings/' . $pengaturan->favicon ?? '') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/settings/' . $pengaturan->favicon ?? '') }}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="bg-light" style="background-image: url('{{ asset('images/latar-belakang/1.jpg') }}'); background-size:cover;">


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card shadow p-5">
                        <img src="{{ asset('images/logo_meta.jpg') }}" alt="Logo" class="card-img-top">
                        <div class="card-body">
                            <p class="text-muted">Gunakan alamat email dan kata sandi Anda untuk mengakses halaman dasbor.</p>
                            <!-- FORM START -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="alamatEmail" class="form-label">Alamat Email</label>
                                    <input type="email" id="alamatEmail"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Masukan alamat email" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- group item end -->

                                <div class="mb-3">
                                    <label for="kataSandi" class="form-label">Kata Sandi</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="kataSandi"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Masukan kata sandi" required autocomplete="current-password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- group item end -->

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                            old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat saya') }}
                                        </label>
                                    </div>
                                </div>
                                <!-- group item end -->

                                <div class="d-block">
                                    <button class="btn btn-lg btn-primary w-100" type="submit">
                                        Masuk
                                    </button>
                                </div>

                            </form>
                            <!-- FORM END -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- .row end -->
            <div class="row my-5">
                <div class="col-md-5 mx-auto">
                    <p class="text-muted">{!! $pengaturan->copyright ?? '' !!}</p>
                </div>
            </div>
            <!-- .row end -->
        </div>
    </section>

</body>
</html>

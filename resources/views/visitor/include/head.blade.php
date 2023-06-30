    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ $pengaturan->judul_situs }}</title>   
    <meta property="og:title" content="{{ $pengaturan->judul_situs }}">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $pengaturan->logo_meta }}">
    <meta property="og:url" content="{{ $pengaturan->alamat_web }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="{{ $pengaturan->logo_meta }}">
    <meta property="og:description" content="{{ $pengaturan->deskripsi_situs }}">
    <meta property="og:site_name" content="{{ $pengaturan->judul_situs }}">
    <meta name="twitter:image:alt" content="Cover Website DLHK Kota Jayapura">

    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{ asset('gambar/pengaturan/' . $pengaturan->favicon) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('gambar/pengaturan/' . $pengaturan->favicon) }}">
    <!-- Bootstrap v5.0.2 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.') }}css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

         <!-- CSRF TOKEN -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
            .page-item.active .page-link {
                background-color: #198754;
                border-color: #198754;
                }
            .page-item a
            {
                /* color: #121312 !important */
            }
            .page-link 
            {
                color: #198754;
            }
            .page-link:hover
            {
                color: #198754;
            }

    </style>

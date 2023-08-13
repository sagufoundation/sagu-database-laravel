    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/settings/'.$settings->favicon)}}">
    @stack('script-header')

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons -->
    <link href="{{ asset('assets/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- C3 Chart css -->
    <link href="{{ asset('assets/admin/assets/libs/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />

    <!--C3 Chart-->
    <script src="{{ asset('assets/admin/assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/libs/c3/c3.min.js')}}"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Head CSS -->
    <style>
    .icon-sml {
        width: 15px;
        height: 15px;
    }
    .icon-med {
        width: 25px;
        height: 25px;
    }
    .icon-lrg {
        width: 35px;
        height: 35px;
    }
    .merah {
        font-size:25px;
        color:red;
    }
    </style>
@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <li>{{ Str::title(Request::segment(1)) }}</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">{{ Str::title(Request::segment(1)) }}</h4>
            </div>
        </div>
    </div>
    <!-- row end -->

    @if (Auth::user()->hasRole('administrator'))
        
    <div class="row">
        <div class="col-md-6 col-xl-3">
           <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success border-success border">
                                <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dashboard_total_students ?? '' }}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Students</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
           </div>
        </div> <!-- end col-->
    
        <div class="col-md-6 col-xl-3">
               <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success border-success border">
                                <i class="mdi mdi-account-group display-4 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_pengguna ?? '' }}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Pengguna</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
               </div>
        </div> <!-- end col-->
    
    </div> <!-- row end -->
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0"> Students <i class="mdi mdi-newspaper "></i> </h4>
                    <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                        <div id="chartSiswa"></div>
                            <!-- JUMLAH siswa -->
                            {{-- <input type="hidden" value="{{ $dashboard_total_students }}" name="dashboard_total_students" id="dashboard_total_students">
                            <input type="hidden" value="{{ $dashboard_total_students_semua }}" name="dashboard_total_students_semua" id="dashboard_total_students_semua">
                            <input type="hidden" value="{{ $dashboard_total_students_draft }}" name="dashboard_total_students_draft" id="dashboard_total_students_draft"> --}}
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div> <!-- row end -->
    
    <script src="{{ asset('assets/js/grafik.js')}}"></script>

    @else
        <h1>Welcome! {{ Auth::user()->name }}</h1>
    @endif

  @stop

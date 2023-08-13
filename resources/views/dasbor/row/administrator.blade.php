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
                            <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_siswa ?? '' }}</span></h3>
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
                        <input type="hidden" value="{{ $dasbor_jml_siswa }}" name="dasbor_jml_siswa" id="dasbor_jml_siswa">
                        <input type="hidden" value="{{ $dasbor_jml_siswa_semua }}" name="dasbor_jml_siswa_semua" id="dasbor_jml_siswa_semua">
                        <input type="hidden" value="{{ $dasbor_jml_siswa_draft }}" name="dasbor_jml_siswa_draft" id="dasbor_jml_siswa_draft">
                </div> <!-- collapsed end -->
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col-->
    
</div> <!-- row end -->

<script src="{{ asset('assets/js/grafik.js')}}"></script>

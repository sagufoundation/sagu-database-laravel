
{{-- <!-- Content you want after the sticky element -->
<div class="fixed-bottom bg-warning p-2">
    <!-- The sticky element will appear as if its been placed here -->
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3">
                <div class="d-flex">
                    <div>
                        <p class="fs-5 me-auto"><b><i class="fa-solid fa-info-circle"></i> INFO : Website ini masih dalam tahap pengembangan.</b> <br> Silahkan kembali lagi dalam waktu mendatang untuk informasi yang lebih lengkap. Terima kasih sudah berkunjung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div> --}}


    <footer id="rs-footer" class="rs-footer home9-style home12-style">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <div class="footer-logo mb-30">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('gambar/pengaturan/' . $pengaturan->logo_loader) }}" alt="gambar ilustrasi" title="{{ $pengaturan->judul_situs }} ">
                            </a>
                        </div>
                        <div class="textwidget pr-60 md-pr-15">
                            <p>{{ $pengaturan->deskripsi_situs }}</p>
                        </div>
                        <ul class="footer_social">
                            @if(!empty($pengaturan->instagram))
                            <li>
                                <a href="{{ $pengaturan->instagram }}" target="_blank" title="Instagram"><span><i class="fa-brands fa-instagram"></i></span></a>
                            </li>
                            @endif
                            @if(!empty($pengaturan->facebook))
                            <li>
                                <a href="{{ $pengaturan->facebook }}" target="_blank" title="Facebook"><span><i class="fa-brands fa-facebook"></i></span></a>
                            </li>
                            @endif
                            @if(!empty($pengaturan->twitter))
                            <li>
                                <a href="{{ $pengaturan->twitter }}" target="_blank" title="Twitter"><span><i class="fa-brands fa-twitter"></i></span></a>
                            </li>
                            @endif
                            @if(!empty($pengaturan->tiktok))
                            <li>
                                <a href="{{ $pengaturan->tiktok }}" target="_blank" title="Tiktok"><span><i class="fa-brands fa-tiktok"></i></span></a>
                            </li>
                            @endif
                            @if(!empty($pengaturan->linkedin))
                            <li>
                                <a href="{{ $pengaturan->linkedin }}" target="_blank" title="Linkedin"><span><i class="fa-brands fa-linkedin"></i></span></a>
                            </li>
                            @endif
                            @if(!empty($pengaturan->youtube))
                            <li>
                                <a href="{{ $pengaturan->youtube }}" target="_blank" title="Youtube"><span><i class="fa-brands fa-youtube"></i></span></a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <h3 class="widget-title">Alamat</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc"> {{ $pengaturan->alamat_kantor }}
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:{{ $pengaturan->nomor_telepon }}">{{ $pengaturan->nomor_telepon }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:{{ $pengaturan->alamat_email }}"> {{ $pengaturan->alamat_email }} </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                        <!-- map -->
                        <iframe src="{!! $pengaturan->alamat_google_map !!}"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="shadow"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-20">
                        <div class="copyright">
                            <p>&copy; {!! $pengaturan->copyright !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end md-text-start">
                        <ul class="copy-right-menu">
                            <li><a href="{{ url('agenda') }}">Agenda Kegiatan</a></li>
                            <li><a href="{{ url('berita') }}">Berita</a></li>
                            <li><a href="{{ url('kontak') }}">Kontak</a></li>
                            <li><a href="{{ route('login') }}"  target="_blank">Masuk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- start scrollUp  -->
    <div id="scrollUp" class="green-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

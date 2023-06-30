

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (!Auth::user()->picture)
                        <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset('gambar/pengguna/' . Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle avatar-md">
                        @endif

                        <div class="dropdown">
                            <a href="{{ url('dasbor/pengguna/akun-saya') }}" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="{{ url('dasbor/akun-saya') }}" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Akun Saya</span>
                                </a>

                                @if (Auth::user()->hasRole('administrator'))
                                <!-- item-->
                                <a href="{{ url('dasbor/pengaturan') }}" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Pengaturan</span>
                                </a>
                                @endif

                                <!-- item-->
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </div>
                        <p class="text-muted">
                            {{ implode('', Auth::user()->roles()->pluck('display_name')->toArray()) }}
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    @if (Auth::user()->hasRole('administrator'))
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#siswa" data-toggle="collapse">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span> Manajemen </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="siswa">
                                        <ul class="nav-second-level">
                                            <li>

                                                <a href="{{ url('dasbor/siswa') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_siswa ?? '0' }}
                                                    </span>
                                                    Siswa
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/siswa/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ '0' }}
                                                    </span>
                                                    Kelompok
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/halaman') }}">
                                        <i class="mdi mdi-text-box-multiple-outline"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_halaman ?? '' }}
                                        </span>
                                        <span> Halaman </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/informasi') }}">
                                        <i class="mdi mdi-leaf"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            0
                                        </span>
                                        <span> Informasi </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/pengguna') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_pengguna ?? '' }}
                                        </span>
                                        <span> Pengguna</span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('editor'))
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#berita" data-toggle="collapse">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span> Berita </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="berita">
                                        <ul class="nav-second-level">
                                            <li>

                                                <a href="{{ url('dasbor/berita') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('author'))
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#berita" data-toggle="collapse">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span> Berita </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="berita">
                                        <ul class="nav-second-level">
                                            <li>

                                                <a href="{{ url('dasbor/berita') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('supervisor'))
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#berita" data-toggle="collapse">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span> Berita </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="berita">
                                        <ul class="nav-second-level">
                                            <li>

                                                <a href="{{ url('dasbor/berita') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                            </ul>

                        </div>

                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

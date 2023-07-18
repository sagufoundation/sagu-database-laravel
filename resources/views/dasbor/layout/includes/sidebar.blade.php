

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
                                <li class="@if(Request::segment(2) == 'dasbor') menuitem-active @endif">
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>
                                <li class="@if(Request::segment(2) == 'program') menuitem-active @endif">
                                    <a href="{{ url('dasbor/program') }}">
                                        <i class="mdi mdi-text-box-multiple-outline"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_program ?? '0' }}
                                        </span>
                                        <span> Program </span>
                                    </a>
                                </li>
                                <li class="@if(Request::segment(2) == 'siswa') menuitem-active @endif">
                                    <a href="{{ url('dasbor/siswa') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_siswa ?? '0' }}
                                        </span>
                                        <span> Siswa</span>
                                    </a>
                                </li>

                                <li class="menu-title mt-2">Area Admin</li>
                                <li>
                                    <a href="#pengaturan" data-toggle="collapse">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span> Pengaturan </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="pengaturan">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{ url('dasbor/pengguna') }}">
                                                    Pengguna
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    @elseif (Auth::user()->hasRole('guest'))
                        
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dasbor </span>
                                    </a>
                                </li>
                                <li class="@if(Request::segment(2) == 'siswa') menuitem-active @endif">
                                    <a href="{{ url('dasbor/siswa') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_siswa ?? '0' }}
                                        </span>
                                        <span> Siswa</span>
                                    </a>
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

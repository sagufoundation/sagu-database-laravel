

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
                                <li class="@if(Request::segment(2) == 'dasbor') menuitem-active @endif">
                                    <a href="{{ url('dasbor') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Student Database</li>

                                <li class="@if(Request::segment(2) == 'students') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(2).'/students') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Students</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'regencies') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(2).'/regencies') }}">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Regencies</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'provinces') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/provinces') }}">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Provinces</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'universities') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/universities') }}">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Universities</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'programs') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/programs') }}">
                                        <i class="fa-solid fa-bars-progress"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Programs</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Library</li>

                                    <li class="@if(Request::segment(2) == 'books') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/books') }}">
                                            <i class="fa-solid fa-book"></i>
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ '0' }}
                                            </span>
                                            <span> Books </span>
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'categories') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/categories') }}">
                                            <i class="fa-solid fa-tags"></i>
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ '0' }}
                                            </span>
                                            <span> Categories </span>
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'authors') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/authors') }}">
                                            <i class="fa-solid fa-at"></i>
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ '0' }}
                                            </span>
                                            <span> Authors </span>
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'loan-logs') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/loan-logs') }}">
                                            <i class="fa-solid fa-book-bookmark"></i>
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ '0' }}
                                            </span>
                                            <span> Loan Logs </span>
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                </li>
                                
                                <li class="menu-title mt-2">Users</li>

                                <li class="@if(Request::segment(2) == 'users') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/users') }}">
                                        <i class="fa-solid fa-users"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> All Users </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'roles') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/roles') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Roles </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

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

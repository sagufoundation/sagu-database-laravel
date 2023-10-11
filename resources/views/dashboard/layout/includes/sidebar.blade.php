

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (!Auth::user()->picture)
                        <img src="{{ asset('images/users/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset(Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->first_name }}" class="rounded-circle avatar-md">
                        @endif

                        <div class="dropdown">
                            <a href="{{ url('dashboard/users/akun-saya') }}" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">{{ Auth::user()->first_name }}</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="{{ url('dashboard/akun-saya') }}" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Akun Saya</span>
                                </a>

                                @if (Auth::user()->hasRole('administrator'))
                                <!-- item-->
                                <a href="{{ url('dashboard/settings') }}" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
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
                                <li class="@if(Request::segment(1) == 'dashboard') menuitem-active @endif">
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Student Database</li>

                                <li class="@if(Request::segment(2) == 'students') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/students') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_publish_students ?? '' }}
                                        </span>
                                        <span> Students</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'programs') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/programs') }}">
                                        <i class="fa-solid fa-bars-progress"></i> <span> Programs</span>
                                        @if($database_total_publish_programs != 0)
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_publish_programs ?? '0' }}
                                        </span>
                                        @endif
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Library</li>

                                    <li class="@if(Request::segment(2) == 'books' && Request::segment(3) == 'show' || Request::segment(3) == 'edit') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/books') }}">
                                            <i class="fa-solid fa-book"></i> <span> Books </span>
                                            @if($database_total_publish_books != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_books ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'categories') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/categories') }}">
                                            <i class="fa-solid fa-tags"></i> <span> Categories </span>
                                            @if($database_total_publish_catagories != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_catagories ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'authors') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/authors') }}">
                                            <i class="fa-solid fa-at"></i> <span> Authors </span>
                                            @if($database_total_publish_authors != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_authors ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'loan-logs') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/books/loan-logs') }}">
                                            <i class="fa-solid fa-book-bookmark"></i> <span> Loan Logs </span>
                                            @if($database_total_publish_loan_books != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_loan_books ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                </li>

                                <li class="menu-title mt-2">Users</li>

                                <li class="@if(Request::segment(2) == 'users') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/users') }}">
                                        <i class="fa-solid fa-users"></i> <span> All Users </span>                                        
                                        @if($database_total_publish_users != 0)
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_publish_users ?? '0' }}
                                        </span>
                                        @endif

                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'roles') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/roles') }}">
                                        <i class="fa-solid fa-tags"></i> <span> Roles </span>
                                        @if($database_total_roles != 0)
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_roles ?? '0' }}
                                        </span>
                                        @endif
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
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span>Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'siswa') menuitem-active @endif">
                                    <a href="{{ url('dashboard/siswa') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dashboard_jml_siswa ?? '0' }}
                                        </span>
                                        <span> Siswa</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('student'))
                        
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Library</li>

                                <li class="@if(Request::segment(2) == 'books' && Request::segment(3) == '') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/books') }}">
                                        <i class="fa-solid fa-book"></i> <span> Books </span>
                                        @if($database_total_publish_books_forStudents != 0)
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_publish_books_forStudents ?? '0' }}
                                        </span>
                                        @endif
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(3) == 'loan-logs') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/books/loan-logs') }}">
                                        <i class="fa-solid fa-book-bookmark"></i> <span> My Loan Logs </span>
                                        @if($database_total_publish_loan_books_forStudents != 0)
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $database_total_publish_loan_books_forStudents ?? '0' }}
                                        </span>
                                        @endif
                                    </a>
                                </li>
                                <!-- menu item end -->

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('librarian'))
                        
                        <div id="sidebar-menu">
                            <ul id="side-menu">
                                <li class="@if(Request::segment(1) == 'dashboard') menuitem-active @endif">
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->
                                <li class="menu-title mt-2">Library</li>

                                    <li class="@if(Request::segment(2) == 'books') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/books') }}">
                                            <i class="fa-solid fa-book"></i> <span> Books </span>
                                            @if($database_total_publish_books != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_books ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'categories') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/categories') }}">
                                            <i class="fa-solid fa-tags"></i> <span> Categories </span>
                                            @if($database_total_publish_catagories != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_catagories ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'authors') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/authors') }}">
                                            <i class="fa-solid fa-at"></i> <span> Authors </span>
                                            @if($database_total_publish_authors != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_authors ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

                                    <li class="@if(Request::segment(2) == 'loan-logs') menuitem-active @endif">
                                        <a href="{{ url(Request::segment(1).'/books/loan-logs') }}">
                                            <i class="fa-solid fa-book-bookmark"></i> <span> Loan Logs </span>
                                            @if($database_total_publish_loan_books != 0)
                                            <span class="badge badge-success badge-pill float-right">
                                                {{ $database_total_publish_loan_books ?? '0' }}
                                            </span>
                                            @endif
                                        </a>
                                    </li>
                                    <!-- menu item end -->

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

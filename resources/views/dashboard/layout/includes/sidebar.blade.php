

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

                        @include('dashboard.layout.includes.sidebar-menu.administrator')

                    @elseif (Auth::user()->hasRole('guest'))

                        @include('dashboard.layout.includes.sidebar-menu.guest')

                    @elseif (Auth::user()->hasRole('student'))
                        
                        @include('dashboard.layout.includes.sidebar-menu.student')

                    @elseif (Auth::user()->hasRole('librarian'))
                        
                        @include('dashboard.layout.includes.sidebar-menu.librarian')

                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (ENV('APP_ENV') == 'local')

                            @if (!Auth::user()->picture)
                            <img src="{{ ('https://dbsf.sagufoundation.org/images/users/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                            @else
                            <img src="{{ ('https://dbsf.sagufoundation.org/'. Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->first_name }}" class="rounded-circle avatar-md">
                            @endif
                        
                        @else 

                            @if (!Auth::user()->picture)
                            <img src="{{ asset('images/users/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                            @else
                            <img src="{{ asset(Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->first_name }}" class="rounded-circle avatar-md">
                            @endif                        
                        
                        @endif

                        <div class="">
                            <a class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->first_name }} {{ Auth::user()->middle_name ?? '' }} {{ Auth::user()->last_name ?? '' }}</a>
                            <small>{{ Auth::user()->email ?? '' }}</small>
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

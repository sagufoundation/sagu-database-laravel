<div id="sidebar-menu">

    <ul id="side-menu">

        <li class="menu-title mt-2">Menu Utama</li>
        
        <li class="@if (Request::segment(1) == 'dashboard') menuitem-active @endif">
            <a href="{{ url('dashboard') }}">
                <i data-feather="airplay"></i>
                <span> Dashboard </span>
            </a>
        </li>
        <!-- menu item end -->

        <li class="menu-title mt-2">Student Database</li>

        <li class="@if (Request::segment(2) == 'students') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/students') }}">
                <i class="mdi mdi-account-group"></i>
                <span class="badge badge-success badge-pill float-right">
                    {{ $dashboard_total_students ?? '' }}
                </span>
                <span> Students</span>
            </a>
        </li>
        <!-- menu item end -->

        <li class="@if (Request::segment(2) == 'programs') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/programs') }}">
                <i class="fa-solid fa-bars-progress"></i> <span> Programs</span>
                @if ($database_total_publish_programs != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_programs ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

    </ul>

</div>

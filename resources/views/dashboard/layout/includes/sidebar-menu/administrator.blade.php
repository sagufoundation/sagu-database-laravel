<div id="sidebar-menu">
    <ul id="side-menu">
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

        <li class="menu-title mt-2">Library</li>

        {{-- <li class="@if ((Request::segment(2) == 'books' && Request::segment(3) == 'show') || Request::segment(3) == 'edit') menuitem-active @endif"> --}}
        <li class="@if (Request::segment(2) == 'books') menuitem-active @endif">

            <a href="{{ url(Request::segment(1) . '/books') }}">
                <i class="fa-solid fa-book"></i> <span> Books </span>
                @if ($database_total_publish_books != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_books ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

        <li class="@if (Request::segment(2) == 'categories') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/categories') }}">
                <i class="fa-solid fa-tags"></i> <span> Categories </span>
                @if ($database_total_publish_catagories != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_catagories ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

        <li class="@if (Request::segment(2) == 'authors') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/authors') }}">
                <i class="fa-solid fa-at"></i> <span> Authors </span>
                @if ($database_total_publish_authors != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_authors ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

        <li class="@if (Request::segment(2) == 'loan-logs') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/books/loan-logs') }}">
                <i class="fa-solid fa-book-bookmark"></i> <span> Loan Logs </span>
                @if ($database_total_publish_loan_books != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_loan_books ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

        </li>

        <li class="menu-title mt-2">Users</li>

        <li class="@if (Request::segment(2) == 'users') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/users') }}">
                <i class="fa-solid fa-users"></i> <span> All Users </span>
                @if ($database_total_publish_users != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_publish_users ?? '0' }}
                    </span>
                @endif

            </a>
        </li>
        <!-- menu item end -->

        <li class="@if (Request::segment(2) == 'roles') menuitem-active @endif">
            <a href="{{ url(Request::segment(1) . '/roles') }}">
                <i class="fa-solid fa-tags"></i> <span> Roles </span>
                @if ($database_total_roles != 0)
                    <span class="badge badge-success badge-pill float-right">
                        {{ $database_total_roles ?? '0' }}
                    </span>
                @endif
            </a>
        </li>
        <!-- menu item end -->

    </ul>
</div>

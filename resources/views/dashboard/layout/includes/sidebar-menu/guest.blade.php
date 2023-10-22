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
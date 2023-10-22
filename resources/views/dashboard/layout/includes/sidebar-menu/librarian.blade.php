<div id="sidebar-menu">
    <ul id="side-menu">
        {{-- <li class="@if(Request::segment(1) == 'dashboard') menuitem-active @endif">
            <a href="{{ url('dashboard') }}">
                <i data-feather="airplay"></i>
                <span> Dashboard </span>
            </a>
        </li>
        <!-- menu item end --> --}}
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
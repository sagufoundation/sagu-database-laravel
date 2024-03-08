<div id="sidebar-menu">

    <ul id="side-menu">

        <li class="@if(Request::segment(2) == 'profile' && Request::segment(2) ==  null) menuitem-active @endif">
            <a href="{{ url(Request::segment(1).'/profile') }}">
                <i class="fa-solid fa-user"></i> <span> My Profile </span>
            </a>
        </li>
        <!-- menu item end -->

        <li class="menu-title mt-2">Library</li>

        <li class="@if(Request::segment(2) == 'books' && Request::segment(2) ==  null) menuitem-active @endif">
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

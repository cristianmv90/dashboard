<nav id="sidebar" class="bg-light sidebar px-2 py-3">
    <div class="sidebar-sticky">
        <a class="navbar-brand py-2" href="{{ url('/table') }}">Dashboard</a>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/chart') }}">
                    Chart
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/table') }}">
                    Table
                </a>
            </li>
        </ul>
    </div>
</nav>
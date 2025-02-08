<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
        </a>
        </li>
        <li class="nav-item d-none d-md-block"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
        <li class="nav-item d-none d-md-block"><a href="/admin/pohon" class="nav-link">Pohon</a></li>
        <li class="nav-item d-none d-md-block"><a href="/admin/produksi" class="nav-link">Produksi</a></li>
    </ul>
    <!--end::Start Navbar Links-->
    <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">
        <!--begin::Fullscreen Toggle-->
        <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
        </li>
        <!--end::Fullscreen Toggle-->
        <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    <span class="d-none d-md-inline">Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a href="/logout" class="dropdown-item">Sign out</a>
                    </li>
                </ul>
            </li>
            <!--end::User Menu Dropdown-->

    </ul>
    <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
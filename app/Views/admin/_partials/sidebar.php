<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="/admin/dashboard" class="brand-link">
                <!--begin::Brand Image-->
                <img
                src="<?= base_url('assets/img/AdminLTELogo.png') ?>"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
                />
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">AdminLTE 4</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
                >
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">Kelola Data</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class=""></i>
                    <p>
                        Produksi
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/produksi" class="nav-link ">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Daftar Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/produksi/tambah" class="nav-link ">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Tambah Produksi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class=""></i>
                    <p>
                        Pohon
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pohon" class="nav-link ">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Daftar Pohon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pohon/tambah" class="nav-link ">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Tambah Pohon</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Profiles</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-download"></i>
                    <p>Installation</p>
                    </a>
                </li>
            </ul>                                
        </nav>
    </div>
</aside>
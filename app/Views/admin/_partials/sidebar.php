<aside class="app-sidebar bg-body-white shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="/admin/dashboard" class="brand-link">
            <span class="brand-text text-dark fw-bold fs-3">Sawit Project</span>
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link text-secondary" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                        <i class="nav-icon bi bi-speedometer" style="color: #343a40;"></i>
                        <p class="text-dark">Dashboard</p>
                    </a>
                </li>

                <li class="nav-header text-secondary">Kelola Data</li>

                <!-- Produksi -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-secondary" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                        <i style="color: #343a40;" class="nav-icon bi bi-box-arrow-in-right" ></i>
                        <p style="color: #343a40;">
                            Produksi
                            <i style="color: #343a40;" class="nav-arrow bi bi-chevron-right "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/produksi" class="nav-link" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                                <i style="color: #343a40;" class="nav-icon bi bi-circle "></i>
                                <p style="color: #343a40;">Daftar Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/produksi/tambah" class="nav-link" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                                <i style="color: #343a40;" class="nav-icon bi bi-circle"></i>
                                <p style="color: #343a40;">Tambah Produksi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Pohon -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-secondary" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                        <i style="color: #343a40;" class="nav-icon bi bi-tree"></i>
                        <p style="color: #343a40;">
                            Pohon
                            <i style="color: #343a40;" class="nav-arrow bi bi-chevron-right "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pohon" class="nav-link" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                                <i style="color: #343a40;" class="nav-icon bi bi-circle"></i>
                                <p style="color: #343a40;">Daftar Pohon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pohon/tambah" class="nav-link" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                                <i style="color: #343a40;" class="nav-icon bi bi-circle"></i>
                                <p style="color: #343a40;">Tambah Pohon</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header text-secondary">Profiles</li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onmouseover="this.classList.add('shadow-sm')" onmouseout="this.classList.remove('shadow-sm')">
                        <i style="color: #343a40;" class="nav-icon bi bi-download"></i>
                        <p style="color: #343a40;">Installation</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

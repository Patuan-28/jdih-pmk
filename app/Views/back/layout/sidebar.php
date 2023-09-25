

<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">JDIH <sup>V2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item" >
                <a class="nav-link" href="<?= base_url('peraturan/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('peraturan/peraturan') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Peraturan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Peraturan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">></h6>
                        <a class="collapse-item" href="<?= base_url('peraturan/kategori_peraturan') ?>">Kategori</a>
                        <a class="collapse-item" href="<?= base_url('peraturan/status') ?>">Status</a>
                        <a class="collapse-item" href="<?= base_url('peraturan/bentuk_peraturan') ?>">Bentuk</a>
                        <a class="collapse-item" href="<?= base_url('peraturan/tipe_dokumen') ?>">Tipe Dokumen</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/berita/berita') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('peraturan/peraturan') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Artikel</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
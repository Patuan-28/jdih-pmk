<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url() ?>img/Frame 1.png" alt="">
        <!-- <h1>Impact<span>.</span></h1> -->
    </a>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#services">Tema Peraturan</a></li>
            <li><a href="#">Berita dan Artikel</a></li>
            <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li>
            <li><a href="#contact">Hubungi Kami</a></li>
            <li><a href="<?= base_url('peraturan/index') ?>">Admin</a></li>
        </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
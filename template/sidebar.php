<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard Admin</div>
                    <a class="nav-link" href="<?= $main_url ?>admin.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        Profil Admin
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>daftar_peserta.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Daftar Peserta
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>keluar.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                        Keluar
                    </a>
                    <hr class="mb-0">
                </div>
            </div>
            <div class="sb-sidenav-footer border">
                <div class="small">Logged in as:</div>
                <?= "Admin" ?>
            </div>
        </nav>
    </div>
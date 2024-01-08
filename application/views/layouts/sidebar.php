<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <div style="display: flex; align-items: center;">
                <img src="<?= site_url() ?>assets/images/logo pasuruan.png" alt="Siap Ayem" width="60" height="60" style="margin-right: 15px;" />
                <span style="color: white; font-size: 23px;">ADMIN<br>PBB Desa</span>
            </div>
        </a>

    </div>
    <div class="menu-sidebar2__content js-scrollbar1">

        <div class="account2">
            <div class="image img-cir img-12">
                <img src="<?= site_url() ?>assets/images/logo pasuruan.png" alt="User Foto" style="width: 150px; height: 150px;" />
            </div>
            <h4 class="name" style="text-align: center;">
                <a class="js-acc-btn" href="#"><?= $this->session->userdata('username') ?></a>
            </h4>

            <h4><?= $this->session->userdata('hp') ?></h4>
        </div>

        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url() ?>dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>

                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url() ?>datasppt/terimapembayaran">
                        <i class="fa fa-money"></i>Terima Pembayaran</a>
                </li>

                <li>
                    <a href="<?= base_url() ?>datasppt"><i class="fas fa-database"></i> DATA SPPT</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cogs"></i>Pengaturan <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="<?= base_url() ?>profil"><i class="fas fa-map-marker-alt"></i> Profil Wilayah</a>
                        </li>


                        <li>
                            <a href="<?= base_url() ?>petugas"><i class="fas fa-user"></i> Manajemen Pengguna</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-print"></i>Laporan <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url() ?>pbbterhutang"><i class="fas fa-circle"></i> PBB Terhutang</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>pbblunas"><i class="fas fa-circle"></i> PBB Lunas</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>setorpbb"><i class="fas fa-circle"></i> Setor PBB</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>rekapitulasipbb"><i class="fas fa-circle"></i> Rekapitulasi PBB</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?= base_url() ?>login/logout"><i class="zmdi zmdi-power"></i> Keluar Sistem</a>
                </li>
            </ul>
            </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
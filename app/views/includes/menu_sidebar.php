<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="<?= base_url() ?>" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="<?= base_url() ?>assets/images/icon_setcctv.png"
                    srcset="<?= base_url() ?>assets/images/icon_setcctv.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="<?= base_url() ?>assets/images/icon_setcctv.png"
                    srcset="<?= base_url() ?>assets/images/icon_setcctv.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="<?= base_url('dashboard') ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="<?= base_url('alternatif') ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Data Uji</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="<?= base_url('kriteria') ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-opt-alt-fill"></em></span>
                            <span class="nk-menu-text">Kriteria</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="<?= base_url('subkriteria') ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></span>
                            <span class="nk-menu-text">Data Sub Kriteria</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="<?= base_url('riwayat') ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-history"></em></span>
                            <span class="nk-menu-text">Perhitungan</span>
                        </a>
                    </li><!-- .nk-menu-item -->



                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
<!-- wrap @s -->
<div class="nk-wrap ">
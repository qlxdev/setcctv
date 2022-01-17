<!-- main header @s -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

$name = explode(" ", $this->session->userdata('fullname'));
$t1 = substr($name[0], 0, 1);
$t2 = substr($name[1], 0, 1);
$fullname = $name[0] . ' ' . $name[1];
$picttext = $t1 . $t2;
?>
<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="<?= base_url() ?>" class="logo-link">
                    <img class="logo-light logo-img" src="<?= base_url() ?>assets/images/logo-rps.png"
                        srcset="<?= base_url() ?>assets/images/logo-rps.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="<?= base_url() ?>assets/images/logo-rps.png"
                        srcset="<?= base_url() ?>assets/images/logo-rps.png 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-search ml-3 ml-xl-0">
                <em class="icon ni ni-search"></em>
                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything"
                    disabled>
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-name dropdown-indicator"><?= $name[0] ?></div>
                                    <div class="user-status user-status-active" style="text-transform: capitalize;">
                                        <?= $this->session->userdata('role') ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span><?= $picttext ?></span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?= $fullname ?></span>
                                        <!-- <span class="sub-text">info@admin.com</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <!-- <li><a href="html/ecommerce/user-profile.html"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/ecommerce/user-profile.html"><em
                                                class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
                                    <li><a href="html/ecommerce/user-profile.html"><em
                                                class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                    </li> -->
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark
                                                Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="<?= base_url() ?>auth/logout"><em
                                                class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
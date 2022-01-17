<?php
defined('BASEPATH') or exit('No direct script access allowed');
$name = explode(" ", $this->session->userdata('fullname'));
$t1 = substr($name[0], 0, 1);
$t2 = substr($name[1], 0, 1);
$fullname = $t1 . ' ' . $t2;
$picttext = $t1 . $t2;
?>
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title page-title">Dashboard</h4>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card is-dark h-100">
                                <div class="nk-ecwg nk-ecwg1 pb-3">
                                    <div class="card-inner">
                                        <!-- <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Total Sales</h6>
                                            </div>
                                        </div> -->
                                        <div class="data">
                                            <div class="amount">Selamat Datang,
                                                <?= $name[0] ?></div>
                                            <div class="info">di Sistem untuk menentukan Lokasi Pemasangan CCTV
                                                Menggunakan Metode Simple Additive Weighting (SAW).</div>
                                        </div>
                                    </div><!-- .card-inner -->

                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-4 col-md-3">
                            <div class="card h-100">
                                <div class="nk-ecwg nk-ecwg2">
                                    <div class="card-inner">
                                        <div class="card-title-group mt-n1">
                                            <div class="card-title">
                                                <h6 class="title mt-2 mb-4">Kriteria</h6>
                                                <h2>5</h2>
                                            </div>

                                        </div>

                                    </div><!-- .card-inner -->

                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-4 col-md-3 pb-3">
                            <div class="card h-100">
                                <div class="nk-ecwg nk-ecwg2">
                                    <div class="card-inner">
                                        <div class="card-title-group mt-n1">
                                            <div class="card-title">
                                                <h6 class="title mt-2 mb-4">Alternatif</h6>
                                                <h2>5</h2>
                                            </div>

                                        </div>

                                    </div><!-- .card-inner -->

                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-8">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Riwayat Pencarian</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-list mt-n2">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span>Order No.</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                        <div class="nk-tb-col"><span>Amount</span></div>
                                        <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead"><a href="#">#95954</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-purple-dim">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">02/11/2020</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead"><a href="#">#95850</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-azure-dim">
                                                    <span>DE</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Desiree Edwards</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">02/02/2020</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="badge badge-dot badge-dot-xs badge-danger">Canceled</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead"><a href="#">#95812</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-warning-dim">
                                                    <img src="<?= base_url() ?>assets/images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Blanca Schultz</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">02/01/2020</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead"><a href="#">#95256</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-purple-dim">
                                                    <span>NL</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Naomi Lawrence</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">01/29/2020</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                        </div>
                                    </div>
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">
                                            <span class="tb-lead"><a href="#">#95135</a></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <div class="user-card">
                                                <div class="user-avatar sm bg-success-dim">
                                                    <span>CH</span>
                                                </div>
                                                <div class="user-name">
                                                    <span class="tb-lead">Cassandra Hogan</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">01/29/2020</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="badge badge-dot badge-dot-xs badge-warning">Due</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div>

                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
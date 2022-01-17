<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="author" content="Qelte">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">
    <!-- Page Title  -->
    <title>Buat Akun - RPS</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css?ver=2.4.0">
</head>

<body class="nk-body bg-lighter npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="<?= base_url('auth/signin') ?>" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="<?= base_url() ?>assets/images/logo-rps.png" srcset="<?= base_url() ?>assets/images/logo-rps.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="<?= base_url() ?>assets/images/logo-rps.png" srcset="<?= base_url() ?>assets/images/logo-rps.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Buat Akun</h4>
                                        <div class="nk-block-des">
                                            <p>Buat akun RPS baru</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="" id="form_signup">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Masukkan nama lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Nama Pengguna</label>
                                        <input type="text" class="form-control form-control-lg" id="email" placeholder="Masukkan nama pengguna Anda">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Masukkan kata sandi Anda">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">Saya setuju dengan <a href="#">Syarat & Ketentuan.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Buat Akun</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Sudah punya akun? <a href="<?= base_url('auth/signin') ?>"><strong>Masuk</strong></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?= base_url() ?>assets/js/bundle.js?ver=2.4.0"></script>
    <script src="<?= base_url() ?>assets/js/scripts.js?ver=2.4.0"></script>

</html>
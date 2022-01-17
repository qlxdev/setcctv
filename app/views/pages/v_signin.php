<!DOCTYPE html>
<html lang="id" class="js">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="author" content="Qelte">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">
    <!-- Page Title  -->
    <title>Masuk ke panel App - setCCTV</title>
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
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="<?= base_url('auth/signin') ?>" class="logo-link">

                                <img class="logo-dark logo-img logo-img-lg"
                                    src="<?= base_url() ?>assets/images/icon_setcctv.png"
                                    srcset="<?= base_url() ?>assets/images/icon_setcctv.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg mb-3">

                                <form method="POST" id="form_signin">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Nama Pengguna</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="username"
                                            id="default-01" placeholder="Masukkan nama pengguna Anda">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                id="password" placeholder="Masukkan kata sandi Anda">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Masuk</button>
                                    </div>
                                </form>
                                <!-- <div class="form-note-s2 text-center pt-4"> Belum punya akun? <a href="<?= base_url('auth/signup') ?>">Buat akun</a>
                                </div> -->

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
    <script>
    $(document).ready(function() {
        $('#form_signin').on('submit', function(event) {
            event.preventDefault();
            const username = $('#default-01').val();
            const password = $('#password').val();
            const base = '<?= base_url('auth/do_signin') ?>';

            if (username.length == "") {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Nama pengguna kosong',
                    showConfirmButton: false,
                    timer: 1500
                })

            } else if (password.length == "") {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Kata sandi kosong',
                    showConfirmButton: false,
                    timer: 1500
                })

            } else {

                $.ajax({
                    method: "POST",
                    url: base,
                    dataType: "JSON",
                    data: {
                        username: username,
                        password: password,
                    },
                    success: function(data) {
                        if (data.success) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Login success',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                var url = "<?= base_url('dashboard') ?>";
                                $(location).attr('href', url);
                            })

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }


                    },
                    error: function() {
                        // your error response
                    }
                })
            }




        })
    })
    </script>

</html>
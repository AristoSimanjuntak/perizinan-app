<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('/img/logo-siantar.png') ?>" type="image/x-icon" />

    <!-- Title -->
    <title>DPMPTSP - Login</title>

    <!-- Bootstrap css-->
    <link href="<?= base_url('/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?= base_url('/assets/plugins/web-fonts/icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/assets/plugins/web-fonts/plugin.css') ?>" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?= base_url('/assets/css/style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/assets/css/skins.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/assets/css/dark-style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/assets/css/colors/default.css') ?>" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('/assets/css/colors/color.css') ?>" />

    <!-- Select2 css-->
    <link href="<?= base_url('/assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="<?= base_url('/assets/css/sidemenu/sidemenu.css') ?>" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/multipleselect/multiple-select.css') ?>">

    <style>
        body {
            background: url('<?= base_url('/img/background.jpg') ?>');
            /* Ganti 'background-image.jpg' dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            justify-content: center;
            background-repeat: repeat;
            
            display: flex;

        }
    </style>

</head>

<body class="main-body leftmenu bg-white">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= base_url('/assets/img/loader.svg') ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page main-signin-wrapper">
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                        <div class="mt-5 pt-4 p-2 pos-absolute">
                            <h2 class="mt-0 text-primary">DPMPTSP </h2>
                            <div class="clearfix"></div>
                            <img src="<?= base_url('/img/logo-siantar.png') ?>" class="ht-250 mb-0" alt="user">
                            <h5 class="p-3  text-primary">Kota Pematangsiantar</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12  ">
                        <div class="container">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="<?= base_url('/img/logo-siantar.png') ?>" class=" d-lg-none header-brand-img text-center float-center mb-4 ht-100 " alt="logo">
                                    <div class="clearfix"></div>
                                    <form action="/auth/login" method="post">
                                        <h5 class="text-left mb-2">Aplikasi SIMPADU</h5>
                                        <p class="mb-4 text-muted tx-13 ml-0 text-left">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Pematangsiantar</p>

                                        <div class="form-group text-left">
                                            <!-- <label>Username</label> -->
                                            <input class="form-control" placeholder="Username" type="text" id="email" name="email" value="">
                                        </div>
                                        <div class="form-group text-left">
                                            <!-- <label>Password</label> -->
                                            <input class="form-control" placeholder="Password" type="password" id="password" name="password">
                                        </div>

                                        <div class="inline" onclick="generate()">
                                            <i class="fas fa-sync"></i>
                                        </div>

                                        <div id="image" class="inline" selectable="False">
                                        </div>

                                        <div class="form-group text-left" id="user-input">
                                            <input class="form-control" placeholder="Capcha" type="text" id="submit" name="password">
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-lg-6 mb-2">
                                                <button class="btn ripple btn-main-primary btn-block" type="submit">Masuk</button>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <!-- <button class="btn ripple btn-info btn-block" type="submit">Daftar</button> -->
                                                <a href="<?= base_url('daftar') ?>" class="btn ripple btn-info btn-block" type="submit"> Daftar </a>
                                            </div>
                                        </div>


                                    </form>
                                    <hr>

                                    <div class="row row-sm">
                                        <div class="col-lg-6 mb-2">
                                            <button class="btn ripple btn-success btn-block" type="submit">Lacak Berkas</button>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <button class="btn ripple btn-danger btn-block" type="submit">Persyaratan Izin</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Row -->



</body>

<script>
    let captcha;

    function generate() {

        // Clear old input
        document.getElementById("submit").value = "";

        // Access the element to store
        // the generated captcha
        captcha = document.getElementById("image");
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        // Generate captcha for length of
        // 5 with random character
        for (let i = 1; i < 5; i++) {
            uniquechar += randomchar.charAt(
                Math.random() * randomchar.length)
        }

        // Store generated input
        captcha.innerHTML = uniquechar;
    }

    function printmsg() {
        const usr_input = document
            .getElementById("submit").value;

        // Check whether the input is equal
        // to generated captcha or not
        if (usr_input == captcha.innerHTML) {
            let s = document.getElementById("key")
                .innerHTML = "Matched";
            generate();
        } else {
            let s = document.getElementById("key")
                .innerHTML = "not Matched";
            generate();
        }
    }
</script>
<!-- Jquery js-->
<script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap js-->
<script src="<?= base_url('/assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?= base_url('/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Perfect-scrollbar js -->
<script src="<?= base_url('/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>

<!-- Sidemenu js -->
<script src="<?= base_url('/assets/plugins/sidemenu/sidemenu.js') ?>"></script>

<!-- Sidebar js -->
<script src="<?= base_url('/assets/plugins/sidebar/sidebar.js') ?>"></script>

<!-- Select2 js-->
<script src="<?= base_url('/assets/plugins/select2/js/select2.min.js') ?>"></script>

<!-- Sticky js -->
<script src="<?= base_url('/assets/js/sticky.js') ?>"></script>

<!-- Custom js -->
<script src="<?= base_url('/assets/js/custom.js') ?>"></script>

<!-- Internal Chart.Bundle js-->
<script src="<?= base_url('/assets/plugins/chart.js/Chart.bundle.min.js') ?>"></script>

<!-- Peity js-->
<script src="<?= base_url('/assets/plugins/peity/jquery.peity.min.js') ?>"></script>

<!-- Internal Morris js -->
<script src="<?= base_url('/assets/plugins/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('/assets/plugins/morris.js/morris.min.js') ?>"></script>

<!-- Circle Progress js-->
<script src="<?= base_url('/assets/js/circle-progress.min.js') ?>"></script>
<script src="<?= base_url('/assets/js/chart-circle.js') ?>"></script>

<!-- Internal Dashboard js-->
<script src="<?= base_url('/assets/js/index.js') ?>"></script>

<!-- Internal Jquery-Ui js-->
<script src="<?= base_url('/assets/plugins/jquery-ui/ui/widgets/datepicker.js') ?>"></script>

<!-- Internal Jquery.maskedinput js-->
<script src="<?= base_url('/assets/plugins/jquery.maskedinput/jquery.maskedinput.js') ?>"></script>

<!-- Internal Specturm-colorpicker js-->
<script src="<?= base_url('/assets/plugins/spectrum-colorpicker/spectrum.js') ?>"></script>

<!-- Internal Ion-rangeslider js-->
<script src="<?= base_url('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') ?>"></script>

<!-- Select2 js-->
<script src="<?= base_url('/assets/js/select2.js') ?>"></script>

<!--Bootstrap-datepicker js-->
<script src="<?= base_url('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') ?>"></script>

<!-- Internal jquery-simple-datetimepicker js -->
<script src="<?= base_url('/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') ?>"></script>

<!-- Internal Form-elements js-->
<script src="<?= base_url('/assets/js/form-elements.js') ?>"></script>

</html>
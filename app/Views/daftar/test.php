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
    <title>DPMPTSP - Daftar Akun</title>

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('/assets/css/colors/color.css') ?>" />

    <!-- Select2 css-->
    <link href="<?= base_url('/assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="<?= base_url('/assets/css/sidemenu/sidemenu.css') ?>" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/multipleselect/multiple-select.css') ?>">


</head>

<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= base_url('/assets/img/loader.svg') ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->
    <div class="page">
        <div class="main-content pt-0">
            <div class="container">
                <div class="inner-body">
                    <!-- page header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-center-24 mg-b-5">Aplikasi Perizinan Pelayanan Terpadu</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                            </ol>
                        </div>

                    </div>
                    <!-- end -->

                    <div class="row row-sm">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="">
                                        <!-- tab progres -->
                                        <div class="position-relative mb-2" style="height:2rem;">
                                            <div class="w-50 position-absolute top-50 start-50 translate-middle">
                                                <div class="progress" style="height:.25rem;">
                                                    <div class="progress-bar bg-primary" id="progress-tab" role="progressbar" style="width:0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <ul class="nav nav-tabs border-0 w-100 hstack justify-content-between position-absolute top-50 start-50 translate-middle" id="skk-tabs">
                                                    <li class="nav-item" role="presentation">
                                                        <button type="button" class="btn btn-sm btn-primary rounded-pill active" style="width:2rem;height:2rem;" data-bs-toggle="tab" data-bs-target="#tab1" data-skk-value="1">1</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button type="button" class="btn btn-sm btn-primary rounded-pill" style="width:2rem;height:2rem;" data-bs-toggle="tab" data-bs-target="#tab2" data-skk-value="2">2</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill" style="width:2rem;height:2rem;" data-bs-toggle="tab" data-bs-target="#tab3" data-skk-value="3">3</button>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- tab progres end -->

                                        <div class="tab-content p-4">
                                            <!-- tab verifikasi data -->
                                            <div class="tab-pane animate__animated animate__flipInX active" id="tab1">
                                                <div class="col-lg">
                                                    <h4 class="tx-center">Verifikasi Data</h4>
                                                    <form action="/auth/login" method="post">
                                                        <div class="form-group text-left">
                                                            <label class="form-label">Nomor Induk Kependudukan NIK: <span class="tx-danger">*</span></label>
                                                            <input class="form-control" placeholder="NIK" type="text" id="nik" name="nik" value="">
                                                        </div>
                                                        <div class="form-group mg-b-12">
                                                            <label class="form-label">Email: <span class="tx-danger">*</span></label>
                                                            <input class="form-control" name="email" placeholder="Email Pemohon" required="" type="email">
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <button class="btn ripple btn-main-primary" type="submit">Lanjut</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- tab verifikasi data end -->

                                            <div class="tab-pane animate__animated animate__flipInX" id="tab2">
                                                <div class="col-lg">
                                                    <h4 class="tx-center">Kata Sandi</h4>
                                                    <form action="/auth/login" method="post">
                                                        <div class="form-group text-left">
                                                            <label class="form-label">Kata Sandi: <span class="tx-danger">*</span></label>
                                                            <input class="form-control" placeholder="NIK" type="text" id="nik" name="nik" value="">
                                                        </div>
                                                        <div class="form-group mg-b-12">
                                                            <label class="form-label">Konfirmasi Kata Sandi: <span class="tx-danger">*</span></label>
                                                            <input class="form-control" name="email" placeholder="Email Pemohon" required="" type="email">
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <button class="btn ripple btn-main-primary" type="submit">Lanjut</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane animate__animated animate__flipInX" id="tab3">
                                                <h4 class="">Data Pemohon</h4>
                                                <p class="">Morbi nunc nunc, pretium et lacus in, blandit sagittis enim. Nunc vitae ipsum non magna volutpat ornare id nec leo. Aenean et accumsan lacus, sed hendrerit massa. Duis dapibus euismod eros, id fringilla turpis pharetra at. Proin quam augue, mattis sed mi nec, efficitur auctor elit. Donec sed lobortis enim. Maecenas varius ut mi quis tempor.</p>
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

</body>

<script>
    console.clear();
    // Example only, not for production use

    const tabContainer = document.querySelector("#skk-tabs")
    const tabEl = tabContainer.querySelectorAll("[data-bs-toggle='tab']")
    const progressTab = document.querySelector("#progress-tab")

    function tabEventShow(event) {
        const currentItem = this.parentNode
        const list = Array.from(currentItem.parentNode.children)
        const position = list.indexOf(currentItem)
        const length = list.length - 1
        let progressWidth = 0

        progressWidth = Number.isInteger(position) ? position : 0
        progressWidth = (progressWidth > 0 && length > 0) ? (progressWidth / length * 100) : 0

        progressTab.style.width = `${progressWidth}%`

        tabEl.forEach((tab) => {
            if (list.indexOf(tab.parentNode) <= position) {
                tab.classList.add("btn-primary")
                tab.classList.remove("btn-secondary")
            } else {
                tab.classList.add("btn-secondary")
                tab.classList.remove("btn-primary")
            }
        })
    }

    tabEl.forEach((tab) => {
        tab.addEventListener("show.bs.tab", tabEventShow)
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


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


<!-- Internal lightslider js-->
<script src="<?php echo base_url('/assets/plugins/lightslider/js/lightslider.min.js'); ?>"></script>

<!-- Internal navigation js-->
<script src="<?php echo base_url('/assets/js/navigation.js'); ?>"></script>

<!-- Internal Clipboard js-->
<script src="<?php echo base_url('/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/plugins/clipboard/clipboard.js'); ?>"></script>

<!-- Internal Prism js-->
<script src="<?php echo base_url('/assets/plugins/prism/prism.js'); ?>"></script>

<!-- Internal Parsley js-->
<script src="<?php echo base_url('public/assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

<!-- Internal Form-validation js-->
<script src="<?php echo base_url('public/assets/js/form-validation.js'); ?>"></script>

</html>
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

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('/assets/css/colors/color.css') ?>" />

    <!-- Select2 css-->
    <link href="<?= base_url('/assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="<?= base_url('/assets/css/sidemenu/sidemenu.css') ?>" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/multipleselect/multiple-select.css') ?>">

    <!-- Internal Specturm-color picker css-->
    <link href="<?= base_url('/assets/plugins/spectrum-colorpicker/spectrum.css'); ?>" rel="stylesheet">

    <!--Bootstrap-datepicker css-->
    <link href="<?= base_url('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css'); ?>" rel="stylesheet">

    <!-- Internal Datetimepicker-slider css -->
    <link href="<?= base_url('/assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css'); ?>" rel="stylesheet">

    <!-- Internal Ion.rangeslider css-->
    <link href="<?= base_url('/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css'); ?>" rel="stylesheet">



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
                                <li class="breadcrumb-item"><a href="#">SIMPADU</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Pendaftar</li>
                            </ol>
                        </div>

                    </div>
                    <!-- end -->

                    <!-- Row -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1">Pendaftaran Akun</h6>
                                        <p class="text-muted card-sub-title">Silahkan isi data anda.</p>
                                    </div>
                                    <div id="wizard1">
                                        <h3>Verifikasi Data</h3>
                                        <section>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Nomor Induk Kependudukan (NIK)</label>
                                                <input class="form-control" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Email Pemohon</label>
                                                <input class="form-control" required="" type="email">
                                            </div>
                                            <label class="ckbox">
                                                <input type="checkbox"><span class="tx-13">Check me out</span>
                                            </label>
                                        </section>
                                        <h3>Kata Sandi</h3>
                                        <section>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Kata Sandi</label>
                                                <input class="form-control" required="" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Konfirmasi Kata Sandi</label>
                                                <input class="form-control" required="" type="password">
                                            </div>
                                            <label class="ckbox">
                                                <input type="checkbox"><span class="tx-13">Check me out</span>
                                            </label>
                                        </section>
                                        <h3>Data Pemohon</h3>
                                        <section>
                                            <div class="form-group">
                                                <label class="main-content-label tx-medium tx-gray-600">NIK : <span>1232321</span></label> <br>
                                                <label class="main-content-label tx-medium tx-gray-600">Email : <span>asda@gmail.com</span></label>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Nama Lengkap</label>
                                                <input class="form-control" required="" type="text" placeholder="Nama diketik dengan huruf kapital, cantumkan gelar sesuai ijazah (dan sesuai STR untuk tenaga kesehatan)">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600 ">Jenis Kelamin</label>
                                                <select name="contry" class="form-control select1">
                                                    <option value="">Jenis Kelamin</option>
                                                    <option value="laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Tempat Lahir</label>
                                                <input class="form-control" required="" type="text" placeholder="Tempat Lahir diketik dengan huruf kapital">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600 ">Tanggal Lahir</label>
                                                <input class="form-control" required="" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Pendidikan</label>
                                                <select name="" class="form-control select1">
                                                    <option value="">Pilih Pendidikan</option>
                                                    <option value="pns">S3</option>
                                                    <option value="pns">S2</option>
                                                    <option value="pns">S1/D-IV</option>
                                                    <option value="tni">D3</option>
                                                    <option value="polri">SMA</option>
                                                    <option value="polri">SMP</option>
                                                    <option value="polri">SD</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Pekerjaan</label>
                                                <select name="" class="form-control select1">
                                                    <option value="">Pilih Pekerjaan</option>
                                                    <option value="pns">PNS</option>
                                                    <option value="tni">TNI</option>
                                                    <option value="polri">POLRI</option>
                                                    <option value="polri">WIRASWASTA</option>
                                                    <option value="polri">LAINNYA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Alamat</label>
                                                <textarea class="form-control" name="" id="" placeholder="alamat diketik dengan huruf kapital dan tidak perlu menyertakan kecamatan dan kelurahan"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Provinsi</label>
                                                <select name="contry" class="form-control select1">
                                                    <option value="">Pilih provinsi</option>
                                                    <option value="pns">sumut</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Kabupaten/Kota</label>
                                                <select name="contry" class="form-control select1">
                                                    <option value="">Pilih Kabupaten/Kota</option>
                                                    <option value="pns">siantar</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Kecamatan</label>
                                                <select name="contry" class="form-control select1">
                                                    <option value="">Pilih Kecamatan</option>
                                                    <option value="pns">martoba</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Kelurahan</label>
                                                <select name="contry" class="form-control select1">
                                                    <option value="">Pilih Kelurahan</option>
                                                    <option value="pns">sumber jaya</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600 ">No HP</label>
                                                <input class="form-control" required="" type="number" placeholder="+62">
                                            </div>
                                            <label class="ckbox">
                                                <input type="checkbox"><span class="tx-13">Check me out</span>
                                            </label>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

</body>

<!-- <script>
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
</script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->


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
<script src="<?php echo base_url('/assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

<!-- Internal Form-validation js-->
<script src="<?php echo base_url('/assets/js/form-validation.js'); ?>"></script>

<!-- Internal Jquery-steps js-->
<script src="<?php echo base_url('/assets/plugins/jquery-steps/jquery.steps.min.js'); ?>"></script>

<!-- Internal Accordion-Wizard-Form js-->
<script src="<?php echo base_url('/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js'); ?>"></script>

<!-- Internal Form-wizard js-->
<script src="<?php echo base_url('/assets/js/form-wizard.js'); ?>"></script>


</html>
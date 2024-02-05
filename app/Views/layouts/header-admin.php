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
    <title>SIMPADU - Dashboard</title>

    <!-- Bootstrap css-->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?php echo base_url('assets/plugins/web-fonts/icons.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/web-fonts/font-awesome/font-awesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets/plugins/web-fonts/plugin.css"); ?>" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/skins.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/dark-style.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/colors/default.css'); ?>" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/colors/color.css'); ?>" />

    <!-- Select2 css-->
    <link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="<?php echo base_url('assets/css/sidemenu/sidemenu.css'); ?>" rel="stylesheet">

    <!-- Internal DataTables css-->
    <link href="<?php echo  base_url('assets/plugins/datatable/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo  base_url('assets/plugins/datatable/responsivebootstrap4.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo  base_url('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" />



<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?php echo base_url('assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <?= $this->include('layouts/sidemenu-admin'); ?>

        <?= $this->include('layouts/main-header'); ?>

        <?= $this->include('layouts/mobile-header'); ?>

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="container-fluid">
                <div class="inner-body">

                    <!-- Mutipleselect css-->
                    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/multipleselect/multiple-select.css'); ?>">

                    </head>
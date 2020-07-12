<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ticketing Pesawat &mdash; Kereta</title>

    <!-- General CSS Files -->
    <link href="<?= base_url()."assets/css/"; ?>bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>style.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>bootstrap-dashboard.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link href="<?= base_url() . "assets/css/"; ?>components.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>dashboard.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "DataTables/"; ?>datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "DataTables/"; ?>dataTables.buttons.min.js" rel="stylesheet" type="text/css" />
    <script src="<?= base_url().'assets/js/jquery-1.11.2.min.js';?>"></script>
    <link href="<?= base_url() . "DataTables/"; ?>buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?= base_url() . "DataTables/"; ?>datatables.min.js"></script>

    <!-- SweetAlert -->
    <link href="<?= base_url() . "assets/dist/"; ?>sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url().'assets/dist/sweetalert.min.js';?>"></script>
    <script src="<?= base_url().'assets/dist/sweetalert-dev.js';?>"></script>

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('nama') ?> | 
                            <?php
                                echo date('d-M-Y');
                            ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url()."login/" ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index">Ticketing</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index">TKT</a>
                    </div>

                    
                    <?php
                        
                    ?>

                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li><a class="nav-link" href="<?= base_url('admin/index') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/data_rute') ?>"><i class="fas fa-pencil-ruler"></i> <span>Rute</span></a></li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-subway"></i><span>Kereta Api</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('admin/data_kereta') ?>">Pemesanan</a></li>
                                <li><a href="<?= base_url('admin/data_transportasikereta') ?>">Transportasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-plane"></i><span>Pesawat</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('admin/data_pesawat') ?>">Pemesanan</a></li>
                                <li><a href="<?= base_url('admin/data_transportasipesawat') ?>">Transportasi</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i><span>Data User</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_penumpang') ?>">Penumpang</a></li>
                                <li><a class="nav-link" href="<?= base_url('admin/data_petugas') ?>">Petugas</a></li>
                            </ul>
                        </li>
                        
                </aside>
            </div>
            
<!-- Sweet -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
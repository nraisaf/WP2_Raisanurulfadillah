<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/wisata.css" rel="stylesheet" type="text/css">
    <style>
        .bg {
            background-image: url("<?= base_url('assets/'); ?>img/1.jpg");
            height: 90vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="<?= base_url('assets/'); ?>img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Wisata Bogor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?= base_url('Frontend'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('Frontend'); ?>">Daftar Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('Frontend/kulinerFrontend') ?>">Daftar Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('Autentifikasi'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
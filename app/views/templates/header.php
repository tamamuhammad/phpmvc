<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="navbar-brand">
        <a href="<?php BASEURL; ?>" class="brand">PHP MVC</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="<?= BASEURL; ?>" class="nav-link">BERANDA</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASEURL; ?>/teman" class="nav-link">TEMAN</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASEURL; ?>/about" class="nav-link">TENTANG</a>
            </li>
        </ul>
        <form action="<?= BASEURL; ?>/teman/cari" method="post" class="form-inline">
            <input type="text" class="form-control" placeholder="Cari teman.." name="keyword" id="keyword">
            <div class="input-group-append">
                <button class="btn btn-outline-info" type="submit" id="tombolCari">Cari</button>
            </div>
        </form>
    </div>
</nav>

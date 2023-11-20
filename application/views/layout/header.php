<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Frontpage - Start Bootstrap Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="http://localhost/aisyahBPF1_2TID/assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="http://localhost/aisyahBPF1_2TID/assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if($user['role'] == 'Admin') { ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Mahasiswa/') ?>">Mahasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Prodi/') ?>">Prodi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                        <?php } 
                        else { ?>
                        <li class="nav-item dropdown no-arrow"> 
                            <a class="nav-link dropdown-toggle" href="<?= site_url('Profil/') ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img src="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default/') . $user['gambar']; ?>" alt="">
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                        <?php
                            } ?> 
                </ul>                
            </div>
        </div>
</nav>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title><?php echo $judul ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href=<?= base_url(); ?>>Check Positif Corona</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li><a class="nav-item nav-link" href="<?= site_url('page/user') ?>">Beranda</a></li>
                    <li><a class="nav-item nav-link" href="<?= site_url('login/jadwal_test') ?>">Jadwal Test</a></li>
                    <li><a class="nav-item nav-link" href="<?= site_url('login/hasil_test') ?>">Hasil Test</a></li>
                    <li><a class="nav-item nav-link" href="<?= site_url('login/persebaran') ?>">Data Persebaran Corona</a></li>
                </div>
                <div class="navbar-nav">
                    <li><a class="nav-item nav-link" href="<?= site_url('login/tentang') ?>">Tentang</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="nav-item nav-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pengaturan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Hai,<?php echo $this->session->userdata('nama'); ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= site_url('login/pengaturanKecamatan') ?>">Ubah Kecamatan</a>
                                <a class="dropdown-item" href="<?= site_url('login/pengaturanPassword') ?>">Ubah Password</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="nav-item nav-link" href="<?= site_url('login/logout') ?>">Keluar</a></li>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>
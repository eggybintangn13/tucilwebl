<link rel="stylesheet" type="text/css" href="/css/style.css">
<title>G4G</title>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/user/index">GEARS FOR GAMING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/index'); ?>">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('auth/about'); ?>">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/produk">CONTENT</a>
                </li>

                <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/login') ?>">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <img src="/img/indexlogo.png" width="200">
        <h1 class="display-4">G4G</h1>
        <p class="lead">Welcome to The World of Gears</p>
    </div>
</div>
<section>
    <div class="detailproduk-container">
        <!--img-->
        <img src="/img/itemindex2.png">
        <!--about-me-text-->
        <div class="detailproduk-text">
            <p>Gears For Gaming</p>
            <p>Jelajahi dan temukan equipment Gaming paling cocok untukmu dan tingkatkan pengalaman Gamingmu</p>
            <p>Kunjungi Halaman Content untuk fitur yang lebih detail</p>
            <button onclick="location.href='/auth/produk'">GO TO CONTENT</button>
        </div>
    </div>
</section>
<section id="testimony">
    <div class="container bg-light">
        <h3 class="title">Apa kata mereka tentang G4G?</h3>
    </div>
    <div class="container">
        <div class="row bg-light">
            <div id="testimonySlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonySlider" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonySlider" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <left>
                                            <img src="/img/noval.png" alt="" width="20%">
                                        </left>
                                        <h4>Noval Aditya Marlon</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Selama saya menggunakan G4G atau Gears For Gaming, saya jadi tau banyak mengenai equiipent gaming yang membuat saya bisa memilih equipment yang paling cocok dengan saya maka dari itu membuat pengalaman gaming saya menjadi lebih meningkat dan menyenangkan. terimakasih G4G. Sukses selalu G4G.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <left>
                                            <img src="/img/umar.png" alt="" width="20%">
                                        </left>
                                        <h4>M Umaruddin Syam</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Awalnya saya tau Gears For Gaming dari teman, katanya disini kita bisa tahu spesifikasi equipment gaming dengan detail yang membuat saya dapat memilih dan membeli equipment gaming yang saya inginkan dan meningkatkan pengalaman gaming saya dan juga saya menjadi lebih jago ketika main game hehe. terimakasih G4G.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="/css/about.css">
<title>About G4G</title>
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
                    <a class="nav-link" href="/auth/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/produk">CONTENT</a>
                </li>
                <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/logout') ?>">LOGOUT</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/login') ?>">LOGOUT</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="bg1">
        <div class="about">
            <p>1817051013</p>
            <p>EGGY BINTANG N</p>
            <p>Graphic Designer <br>& Gamer</p>
        </div>
        <img alt="model1" class="model1" src="/img/pictabout.png">
    </div>
</section>
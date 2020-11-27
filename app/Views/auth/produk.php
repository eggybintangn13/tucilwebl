<link rel="stylesheet" type="text/css" href="/css/produk.css">
<title>Content G4G</title>
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
<section>
    <div class="bg1">
        <div class="produk1">
            <p>LOGITECH G</p>
            <p>G733 WHITE EDITION</p>
            <p>LIGHTSPEED WIRELESS RGB GAMING HEADSET <br>$119.99 - $129.99</p>
            <button class="hire-btn">SPESIFIKASI</button>
        </div>
        <img alt="model1" class="model1" src="/img/item1.png">
    </div>
</section>
<section>
    <div class="bg1">
        <div class="produk1">
            <p>LOGITECH G</p>
            <p>G935 LIGHTSYNC</p>
            <p>WIRELESS 7.1 SURROUND SOUND<br>$169.99</p>
            <button class="hire-btn">SPESIFIKASI</button>
        </div>
        <img alt="model1" class="model1" src="/img/item2.png">
    </div>
</section>
<section>
    <div class="bg1">
        <div class="produk1">
            <p>LOGITECH G</p>
            <p>G533 WIRELESS</p>
            <p>DTS 7.1 SURROUND GAMING HEADSET<br>$149.99</p>
            <button class="hire-btn">SPESIFIKASI</button>
        </div>
        <img alt="model1" class="model1" src="/img/item3.png">
    </div>
</section>
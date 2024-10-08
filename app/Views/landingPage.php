<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <div class="container mb-5 mt-5">
        <div class="mb-5 p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-12 text-center mb-4">
                    <img src="assets/images/japan_airlines_graphic.png" class="img-fluid rounded">
                </div>
                <div class="col-12">
                    <div class="about-body">
                        <h5 class="about-title text-center">Experience the Spirit of Japan</h5>
                        <p class="about-text text-black">Japan Airlines connects you to the heart of Japan and beyond. With our extensive network, fly to Tokyo, Osaka, Kyoto, Sapporo, and more! Enjoy our world-class service, flexible bookings, and exceptional safety standards. We are committed to providing a seamless travel experience, connecting you to key destinations across Asia, North America, and Europe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('components/landing/hero_section') ?>

    <section class="boxes mb-5">
        <div class="container">
            <div class="box">
                <a href="<?= base_url()?>" class="navbar-brand text-center fs-5 d-block">
                    <img class="buttons d-block mx-auto" src="assets/images/logo/japan_airlines_manage.png">
                    <h3 class="text-japan-red mt-2">Manage Booking</h3>
                </a>
            </div>
            <div class="box">
                <a href="<?= base_url()?>" class="navbar-brand text-center fs-5 d-block">
                    <img class="buttons d-block mx-auto" src="assets/images/logo/japan_airlines_checkin.png">
                    <h3 class="text-japan-red mt-2">Check In</h3>
                </a>
            </div>
            <div class="box">
                <a href="<?= base_url()?>" class="navbar-brand text-center fs-5 d-block">
                    <img class="buttons d-block mx-auto" src="assets/images/logo/japan_airlines_status.png">
                    <h3 class="text-japan-red mt-2">Flight Status</h3>
                </a>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>
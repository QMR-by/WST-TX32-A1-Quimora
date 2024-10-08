<!-- Header -->
<nav class="navbar navbar-expand-sm navbar-jal-red">
</nav>

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand text-uppercase fs-5 text-white">
            <img src="<?= base_url('assets/images/logo/Japan_Airlines_Logo_(2011).svg.png') ?>" alt="Japan Airlines Logo" width="250" class="d-inline-block align-middle">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>   
        </button>

        <div class="collapse navbar-collapse" id="list2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('travelInformation') ?>" class="nav-link text-white">Travel Info</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('aboutUs') ?>" class="nav-link text-white">About JAL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

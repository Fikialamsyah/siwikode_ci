<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('Home/index'); ?>">SIWIKODE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Culinary/'); ?>">Culinary Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Travel/'); ?>">Travel Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('About/'); ?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('Travel/registrasi'); ?>">Travel Registration</a>
                        <a class="dropdown-item" href="<?= base_url('Culinary/registrasi'); ?>">Culinary Registration</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('pages/'); ?>">SIWIKODE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pages/culinary'); ?>">Wisata Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pages/travel'); ?>">Wisata Rekreasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pages/about'); ?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('pages/registrasi_travel'); ?>">Registrasi Rekreasi</a>
                        <a class="dropdown-item" href="<?= base_url('pages/registrasi_culinary'); ?>">Registrasi Kuliner</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
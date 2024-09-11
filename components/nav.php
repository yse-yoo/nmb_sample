<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.php">
            Crispy Kitchen
        </a>

        <div class="d-lg-none">
            <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#BookingModal">Reservation</button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Story</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                        <li><a class="dropdown-item" href="menu.php">All</a></li>
                        <?php foreach ($categories as $key => $category): ?>
                            <li><a class="dropdown-item" href="menu.php?category=<?= $key ?>"><?= $category ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">Our Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>


        <div class="d-none d-lg-block">
            <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#BookingModal">Reservation</button>
        </div>

    </div>
</nav>
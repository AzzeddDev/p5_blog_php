<?php

if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {?>

    <header class="container">
    <nav class="navbar container navbar-expand-lg bg-dashboard-navbar">
        <div class="container p-0">
            <a class="navbar-brand" href="http://localhost/mon-blog/index.php">
                <img class="logo-navbar" src="http://localhost/mon-blog/web/logo-colored.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav m-auto mb-2 mb-lg-0 pe-lg-5 pe-md-0">
                    <li class="nav-item me-lg-1">
                        <a class="nav-link nav-link-db" href="http://localhost/mon-blog/templates/front_office/portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item ms-lg-1">
                        <a class="nav-link nav-link-db" href="http://localhost/mon-blog/templates/front_office/blog.php">Blog</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link nav-link-db" href="http://localhost/mon-blog/templates/front_office/contactez-moi.php">Contact</a>
                    </li>
                </ul>

                <div class="btn-group">
                    <a class="btn-icon-db btn dropdown-toggle" href="#" data-bs-toggle="dropdown"
                       data-bs-display="static" aria-expanded="false">
                        Mon compte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="http://localhost/mon-blog/templates/admin_office/dashboard-admin.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="http://localhost/mon-blog/templates/admin_office/dashboard-admin-settings.php">Paramètre</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="http://localhost/mon-blog/src/controllers/deconnexion/deconnexion.php">Déconnexion</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>

<?php

} else {
    require(__DIR__ . '/../../templates/front_office/404.php');
} ?>
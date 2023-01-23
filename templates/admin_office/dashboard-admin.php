<?php
session_start();

$title = "Dashboard";

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 1) {

        //Model
        require('../../src/model/model.php');

        //Admin infos
        require('../../src/controllers/admin/admin.php');
        require('../../src/controllers/admin/connexion.php');

        ob_start();

        require('../admin_office/header.php');

        ?>

        <!-- Content Dashboard -->
        <main>
            <div class="dashboard-top">
                <div class="container">
                    <div class="row g-3">
                        <aside class="col-md-4">
                            <?php
                            require('aside.php')
                            ?>
                        </aside>
                        <div class="col-md-8">
                            <div class="bg-dashboard-blocs mb-3">
                                <div class="hello-hand"><i class="fa-regular fa-hand-peace"></i></div>
                                <h1 class="hello-txt">Bienvenue dans votre espace <?php echo $user['pseudo']; ?></h1>
                            </div>

                            <div class="row gx-3">
                                <!-- Membres -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/membres.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-circle-user icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Espace membres</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Commentaires -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/commentaires.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-message icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Espace commentaires</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Articles -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/articles.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-newspaper icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Espace articles</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Projets -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/projets.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-images icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Espace projets</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Rédaction articles -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/r_articles.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-newspaper icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Rèdiger un post</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Rédaction projets -->
                                <div class="col-md-6">
                                    <div class="bg-dashboard-blocs p-0 mb-3">
                                        <a class="btn-aside-db d-flex flex-column align-items-center p-4"
                                           href="http://localhost/mon-blog/templates/admin_office/r_projects.php">
                                            <div class="bloc-icon pt-3">
                                                <i class="fa-regular fa-images icon-h"></i>
                                            </div>
                                            <div class="pb-3">
                                                <h2 class="tu-db-admin m-0">Poster un projet</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <?php require('../back_office/footer.php');

        $content = ob_get_clean();

        require('../back_office/layout.php');

    }
    
} else {
    require(__DIR__ . '/../../templates/front_office/404.php');
} ?>



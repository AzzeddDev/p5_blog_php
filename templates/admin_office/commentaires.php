<?php
session_start();

$title = "Les commentaires";

require('../../src/model/model.php');
require('../../src/controllers/admin/admin.php');
require('../../src/controllers/admin/commentaires_admin.php');

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 1) {


        ob_start();

        require('../admin_office/header.php'); ?>


        <main>
            <div class="dashboard-top">
                <div class="container">
                    <div class="row g-3">
                        <aside class="col-md-4">
                            <?php
                            require ('aside.php')
                            ?>
                        </aside>
                        <div class="col-8">
                            <div class="bg-dashboard-blocs mb-3">
                                <div class="hello-hand"><i class="fa-regular fa-message"></i></div>
                                <h1 class="hello-txt">Espace commentaires</h1>
                            </div>

                            <!-- Commentaires -->
                            <div class="bg-dashboard-blocs p-0 mb-3">
                                <div class="btn-aside-db d-flex justify-content-between p-4">
                                    <div class="col-12">
                                        <div class="bloc-icon-main mb-2">
                                            <i class="fa-regular fa-message pe-2"></i>
                                            <h2 class="tu-db m-0">Commentaires</h2>
                                        </div>
                                        <div class="row gx-3">
                                            <?php while ($c = $commentaires->fetch()) { ?>
                                                <div class="col-md-6">
                                                    <div class="col-bg-infos justify-content-between mb-3">
                                                        <div class="d-flex w-100 justify-content-between comment-btn ps-2">
                                                            <div class="d-flex align-items-center pe-2"><?= $c['pseudo'] ?> : <?= $c['commentaire'] ?></div>
                                                            <a class="btn-delete"
                                                               href="http://localhost/mon-blog/templates/admin_office/commentaires.php?type=commentaire&supprime=<?= $c['id'] ?>">
                                                                <i class="fa-regular fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <!-- Footer -->
        <?php
        require('../back_office/footer.php');

        $content = ob_get_clean();

        require('../back_office/layout.php');
    }

} else {
    require(__DIR__ . '/../../templates/front_office/404.php');
}?>




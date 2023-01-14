<?php
session_start();

$title = "Mes articles";

require('../../src/model/model.php');
require('../../src/controllers/admin/admin.php');
require('../../src/controllers/admin/articles_admin.php');

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 1) {

    ob_start();

    require('../back_office/header.php'); ?>

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
                            <div class="hello-hand"><i class="fa-regular fa-newspaper"></i></div>
                            <h1 class="hello-txt">Espace articles</h1>
                        </div>

                        <!-- Membres -->
                        <div class="bg-dashboard-blocs p-0 mb-3">
                            <div class="btn-aside-db d-flex justify-content-between p-4">
                                <div class="col-12">
                                    <div class="bloc-icon-main mb-3">
                                        <i class="fa-regular fa-newspaper pe-2"></i>
                                        <h2 class="tu-db">Mes articles</h2>
                                    </div>
                                    <div class="row gx-3">
                                        <?php while ($a = $articles->fetch()) { ?>
                                            <div class="col-md-6">
                                                <div class="col-bg-infos justify-content-between mb-3">
                                                    <div class="d-flex w-100 justify-content-between align-items-center comment-btn ps-2">
                                                        <div class="d-flex align-items-center pe-2"><?= $a['title'] ?></div>
                                                        <div class="d-flex">
                                                            <a class="btn-modify"
                                                               href="http://localhost/mon-blog/templates/admin_office/article-modifs.php?id=<?= $a['id'] ?>">
                                                                <i class="fa-solid fa-pen"></i>
                                                            </a>
                                                            <a class="btn-delete"
                                                               href="http://localhost/mon-blog/templates/admin_office/articles.php?type=article&supprime=<?= $a['id'] ?>">
                                                                <i class="fa-regular fa-trash-can"></i>
                                                            </a>
                                                        </div>
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
    <?php require('../back_office/footer.php');

    $content = ob_get_clean();

    require('../back_office/layout.php');

    }

} else {
    require(__DIR__ . '/../../templates/front_office/404.php');
}?>
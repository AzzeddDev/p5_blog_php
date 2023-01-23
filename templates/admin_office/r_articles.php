<?php
session_start();

$title = "Rèdiger un article";

require('../../src/model/model.php');
require('../../src/controllers/admin/admin.php');
require('../../src/controllers/admin/r_articles_admin.php');

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 1) {

        ob_start();

        require('../admin_office/header.php'); ?>

        <main>
            <div class="dashboard-top">
                <div class="container">
                    <div class="row g-3">
                        <aside class="col-md-4">
                            <?php require ('aside.php') ?>
                        </aside>
                        <div class="col-8">
                            <div class="bg-dashboard-blocs mb-3">
                                <div class="hello-hand"><i class="fa-regular fa-newspaper"></i></div>
                                <h1 class="hello-txt">Rédactions articles</h1>
                            </div>

                            <div class="bg-dashboard-blocs p-0 mb-3">
                                <div class="btn-aside-db d-flex justify-content-between p-4">
                                    <div class="col-12">
                                        <div class="bloc-icon-main mb-3">
                                            <i class="fa-regular fa-newspaper pe-2"></i>
                                            <h2 class="tu-db m-0">Rédiger votre article</h2>
                                        </div>

                                        <form class="row g-3 pb-3" action="../../src/controllers/admin/r_articles_admin.php" method="post" enctype="multipart/form-data">
                                            <input class="default-form-db" type="text" name="title" placeholder="Titre" />
                                            <input class="default-form-db" type="text" name="work_type" placeholder="Work type" />
                                            <textarea class="default-form-db" style="min-height: 300px" name="content" placeholder="Contenu de l'article"></textarea>
                                            <input class="default-form-db" type="file" name="file" />
                                            <button class="btn-classic w-auto px-5" type="submit">Envoyer</button>
                                        </form>
                                        <?php if(isset($message)) { echo $message; } ?>

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

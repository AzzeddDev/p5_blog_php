<?php
session_start();

$title = "Modifier votre article";

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 1) {

    //Model
    require('../../src/model/model.php');

    //Admin infos
    require('../../src/controllers/admin/admin.php');

    //Articles settings
    require('../../src/controllers/admin/m_articles_admin.php');

    ob_start();

    require('../admin_office/header.php');

    ?>

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
                        <div class="bg-dashboard-blocs p-0 mb-3">
                            <div class="btn-aside-db d-flex justify-content-between p-4">
                                <div class="col-12">
                                    <div class="bloc-icon-main mb-3">
                                        <i class="fa-regular fa-circle-user pe-2"></i>
                                        <h2 class="tu-db m-0">Profile</h2>
                                    </div>
                                    <form class="row g-3 pb-3" method="POST" action="../../src/controllers/admin/m_articles_admin.php" enctype="multipart/form-data">
                                        <input class="default-form-db" type="text" name="titre" placeholder="Titre"
                                               value="<?php echo $post['title']; ?>"/>
                                        <input class="default-form-db" type="text" name="type" placeholder="Type"
                                               value="<?php echo $post['work_type']; ?>"/>
                                        <textarea class="default-form-db" style="min-height: 300px" name="contenu" placeholder="Contenu de l'article"><?php echo $post['content']; ?></textarea>
                                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                        <input class="btn-classic w-auto" type="submit" value="Mettre à jour"/>
                                    </form>
                                    <?php if (isset($msg)) { echo $msg; } ?>
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

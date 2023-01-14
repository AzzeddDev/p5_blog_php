<?php
session_start();

$title = "Paramètres profil";

ob_start();

if(isset($_SESSION['role_user'])) {
    if ($_SESSION['role_user'] == 0) {

        //Model
        require('../../src/model/model.php');

        //User infos
        require('../../src/controllers/dashboard/user.php');
        require('../../src/controllers/dashboard/user_settings.php');

        require('../back_office/header.php'); ?>

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
                                        <form class="row g-3 pb-3" method="POST" action="" enctype="multipart/form-data">
                                            <input class="default-form-db" type="text" name="newpseudo" placeholder="Pseudo"
                                                   value="<?php echo $user['pseudo']; ?>"/>
                                            <input class="default-form-db" type="text" name="newmail" placeholder="Mail"
                                                   value="<?php echo $user['mail']; ?>"/>
                                            <input class="default-form-db" type="password" name="newmdp1"
                                                   placeholder="Mot de passe"/>
                                            <input class="default-form-db" type="password" name="newmdp2"
                                                   placeholder="Confirmation du mot de passe"/>
                                            <input class="btn-classic w-auto" type="submit" value="Mettre à jour"/>
                                        </form>
                                        <?php if (isset($msg)) {
                                            echo $msg;
                                        } ?>
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
}
else {
    require(__DIR__ . '/../../templates/front_office/404.php');
} ?>

<?php $title = "Se connecter";

session_start();

ob_start();

require('../../src/model/model.php');
require('../../src/controllers/public/connexion.php');

if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {

    require(__DIR__ . '/../../templates/front_office/404.php');

}

else {?>

    <?php require('header.php'); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb">
                <div class="bg-header">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-7 text-center">
                            <h1 class="pb-4">Connectez-vous</h1>

                            <div class="d-flex justify-content-center">
                                <div class="col-md-7">
                                    <form class="mb-3" name="formconnexion" method="POST" action="">
                                        <input class="form-control default-form mb-3" type="email" name="mailconnect" placeholder="Mail" />
                                        <input class="form-control default-form mb-3" type="password" name="mdpconnect" placeholder="Mot de passe" />
                                        <input class="btn-classic mb-3" type="submit" name="formconnexion" value="Se connecter !" />
                                    </form>

                                    <?php
                                    if(isset($erreur)) {
                                        echo '<div class="mb-3" style="display: inline; padding: 8px 12px; background: #fff; color: red; border-radius: 4px"><i class="fa-regular fa-circle-xmark pe-2"></i>'.$erreur."</div>";
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <p class="log-sign-txt">Vous n'avez pas un compte ?</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="">
                                        <a class="btn-classic mb-3 px-5" href="http://localhost/mon-blog/templates/front_office/creer-un-compte.php">Créer un compte</a>
                                        <br>
                                        <a class="btn-classic px-5" href="http://localhost/mon-blog/templates/admin_office/se-connecter.php">Espace Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php

    require('footer.php');

    $content = ob_get_clean();

    require('layout.php');

} ?>





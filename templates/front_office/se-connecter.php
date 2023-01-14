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
                                    <form name="formconnexion" method="POST" action="">
                                        <input class="form-control default-form mb-3" type="email" name="mailconnect" placeholder="Mail" />
                                        <input class="form-control default-form mb-3" type="password" name="mdpconnect" placeholder="Mot de passe" />
                                        <input class="btn-classic mb-3" type="submit" name="formconnexion" value="Se connecter !" />
                                    </form>
                                    <?php
                                    if(isset($erreur)) {
                                        echo '<font color="red">'.$erreur."</font>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="text-center">
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





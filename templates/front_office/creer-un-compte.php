<?php
session_start();

$title = "Créer votre compte";

require('../../src/model/model.php');
require('../../src/controllers/public/creer_compte.php');

if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {

    require(__DIR__ . '/../../templates/front_office/404.php');

}

else { ?>

    <?php ob_start(); ?>

    <?php require('../front_office/header.php'); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb">
                <div class="bg-header">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-5 text-center">
                            <h1 class="pb-4">Créer votre compte !</h1>

                            <form name="forminscription" method="POST">
                                <input class="form-control default-form mb-3" type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"/>
                                <input class="form-control default-form mb-3" type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                                <input class="form-control default-form mb-3" type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>"/>
                                <input class="form-control default-form mb-3" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                                <input class="form-control default-form mb-3" type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                                <input class="btn-classic mb-4" type="submit" name="forminscription" value="Je m'inscris" />
                            </form>

                            <?php
                            if (isset($erreur)) {
                                echo '<font color="red">' . $erreur . "</font>";
                            }
                            ?>

                            <p class="">Vous avez un compte deja ?</p>
                            <a class="btn-classic" href="http://localhost/mon-blog/templates/front_office/se-connecter.php">Connectez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php require('../front_office/footer.php'); ?>

    <?php $content = ob_get_clean(); ?>

    <?php require('../front_office/layout.php'); ?>

    <?php
}
?>
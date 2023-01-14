<?php $title = "Le blog"; ?>

<?php ob_start();

session_start();

?>

<!-- Navbar -->
<?php

require('../../src/model/model.php');
require('../../src/controllers/admin/connexion.php');

if (isset($_SESSION['id']) and !empty($_SESSION['id'])) {

    require(__DIR__ . '/../../templates/front_office/404.php');

}

else {?>

    <?php require('../../templates/front_office/header.php'); ?>

    <main>

    <!-- Header -->
    <section>
        <div class="container header-mb">
            <div class="bg-header">
                <div class="d-flex justify-content-center">
                    <div class="col-md-7 text-center">
                        <h1 class="pb-4">Accès admin</h1>

                        <div class="d-flex justify-content-center">
                            <div class="col-md-7">
                                <form name="formconnexionadmin" method="POST" action="">
                                    <input class="form-control default-form mb-3" type="email" name="mailconnect" placeholder="Mail" />
                                    <input class="form-control default-form mb-3" type="password" name="mdpconnect" placeholder="Mot de passe" />
                                    <input class="btn-classic mb-3" type="submit" name="formconnexionadmin" value="Se connecter !" />
                                </form>
                                <?php
                                if(isset($erreur)) {
                                    echo '<font color="red">'.$erreur."</font>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

    <!-- Footer -->
    <?php

    require('../../templates/front_office/footer.php');

    $content = ob_get_clean();

    require('../../templates/front_office/layout.php');

} ?>
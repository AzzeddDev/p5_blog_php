<?php
session_start();

$title = "Contactez-moi";

require('../../src/controllers/public/contact.php');

require('../../src/controllers/check_user/check_role.php');

ob_start(); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb mt-4">
                <div class="bg-header">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-5 text-center">
                            <h1 class="pb-4">Contactez-moi</h1>

                            <form method="POST" action="../../src/controllers/public/contact.php">
                                <input class="form-control default-form mb-3" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
                                <input class="form-control default-form mb-3" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
                                <textarea class="form-control default-form mb-3" name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                                <input class="btn-classic px-5"  type="submit" value="Envoyer !" name="mailform"/>
                            </form>

                            <?php if(isset($msg)) {
                                echo $msg;
                            }
                            ?>

                            <!--
                            <div class="d-md-flex mb-2">
                                <div class="col-md-6 col-12 mb-md-0 mb-2 pe-md-2">
                                    <input class="form-control default-form" type="text" placeholder="Nom">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input class="form-control default-form" type="text" placeholder="Prènom">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input class="form-control default-form" type="text" placeholder="Email">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control default-form" id="exampleFormControlTextarea1" rows="3" placeholder="Dites nous ce que vous voulez !"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn-classic px-5" href="#">Envoyer</a>
                            </div>
                            -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php require('../front_office/footer.php');

    $content = ob_get_clean();

    require('../front_office/layout.php');?>







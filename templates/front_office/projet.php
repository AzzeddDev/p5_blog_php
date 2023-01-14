<?php
session_start();

require('../../src/model/model.php');
require('../../src/controllers/blog/projet.php');

$projects = getProjects();
$title = $projet['title'];

require('../../src/controllers/check_user/check_role.php');

ob_start(); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb mt-4">
                <div class="bg-header">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-7 d-flex text-center justify-content-center">
                            <div class="d-block">

                                <div class="mb-2"><p class="portfolio-last-project"><?= $projet['date_project'] ?></p></div>
                                <h1 class="pb-1"><?= $projet['title'] ?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projet photos -->
        <div class="container">
            <div class="col-12">
                <img class="img-fluid w-100 border-top-img" src="../../web/<?= $projet['image'] ?>" alt="">
                <div class="bg-text-project">
                    <p class="m-0 text-white text-center"><?= $projet['content'] ?></p>
                </div>
            </div>
        </div>

        <!-- Contactez-moi -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Contactez-moi</h2>
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-8 col-md-10 col-12 bg-forms">
                            <div class="d-md-flex mb-2">
                                <div class="col-md-6 col-12 mb-md-0 mb-2 pe-md-2">
                                    <input class="form-control default-form" type="text" placeholder="Nom">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input class="form-control default-form" type="text" placeholder="Prènom">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input class="form-control default-form" type="text" placeholder="Prènom">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control default-form" id="exampleFormControlTextarea1" rows="3" placeholder="Dites nous ce que vous voulez !"></textarea>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a class="btn-classic px-5" href="#">Envoyer</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php require('../front_office/footer.php');

    $content = ob_get_clean();

    require('../front_office/layout.php');?>

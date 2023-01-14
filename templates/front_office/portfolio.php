<?php
session_start();

$title = "Portfolio";

require('../../src/model/model.php');
require('../../src/controllers/blog/projet.php');

$projects = getProjects();

require('../../src/controllers/check_user/check_role.php');

ob_start(); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb mt-4">
                <div class="bg-header">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-7 d-flex justify-content-center text-center">
                            <div class="d-block">
                                <?php
                                foreach (array_slice($projects, 0, 1) as $project) {
                                    ?>
                                    <div class="mb-2">
                                        <p class="portfolio-last-project">
                                            Derniers projet
                                        </p>
                                    </div>
                                    <h1 class="pb-1"><?= ($project['title']); ?></h1>
                                    <p class="txt-header pb-2">
                                        <?= ($project['content']); ?>
                                    </p>
                                    <a class="btn-classic" href="http://localhost/mon-blog/templates/front_office/projet.php?id=<?= $project['id'] ?>">Voir le projet</a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mes derniers projets -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Mes derniers projets</h2>
                    <div class="row g-3">
                        <?php
                        foreach (array_slice($projects, 1, 4) as $project) {
                            ?>
                            <a class="col-lg-3 col-md-6 projet-btn" href="http://localhost/mon-blog/templates/front_office/projet.php?id=<?= $project['id'] ?>">
                                <img class="img-fluid img-project" src="../../web/<?= $project['image']; ?>" alt="">
                                <div class="bg-under-project">
                                    <p class="year-exp mb-1">
                                        <?= ($project['work_type']); ?> - <?= ($project['date_project']); ?>
                                    </p>
                                    <h3 class="project-title mb-1">
                                        <?= ($project['title']); ?>
                                    </h3>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tout mes projets -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Tout mes projets</h2>
                    <div class="row g-3">
                        <?php
                        foreach (array_slice($projects, 5, 9999999999) as $project) {
                            ?>
                            <a class="col-lg-3 col-md-6 projet-btn" href="http://localhost/mon-blog/templates/front_office/projet.php?id=<?= $project['id'] ?>">
                                <img class="img-fluid img-project" src="../../web/<?= $project['image']; ?>" alt="">
                                <div class="bg-under-project">
                                    <p class="year-exp mb-1">
                                        <?= ($project['work_type']); ?> - <?= ($project['date_project']); ?>
                                    </p>
                                    <h3 class="project-title mb-1">
                                        <?= ($project['title']); ?>
                                    </h3>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

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
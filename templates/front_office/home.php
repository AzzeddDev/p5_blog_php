<?php
session_start();

$title = "Azz Eddine Blog";

require( __DIR__ . './../../src/controllers/check_user/check_role.php');

ob_start(); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb mt-4">
                <div class="bg-header">
                    <div class="row g-3">
                        <div class="col-md-6 order-tab-1 d-flex align-items-center offset-md-1">
                            <div class="d-block txt-md-center">
                                <h1 class="pb-1">Bonjour je m'apelle Azz Eddine Salmi</h1>
                                <p class="txt-header pb-2">
                                    Je suis un jeune designer & étudiant avec un BTS en Design et une licence en Webdesigner UI/UX.
                                    Je suis actuellement en alternance en Master Développeur d’Applications.
                                </p>
                                <a class="btn-classic" href="http://localhost/mon-blog/templates/front_office/portfolio.php">Mon Portfolio</a>
                                <a class="btn-classic" href="http://localhost/mon-blog/web/mon-cv.pdf">Mon CV</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="./web/me_index.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Language -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-between">
                            <img class="language-maitrises img-fluid px-4" src="http://localhost/mon-blog/web/maitrises/html.png" alt="">
                            <img class="language-maitrises img-fluid px-4" src="http://localhost/mon-blog/web/maitrises/css.png" alt="">
                            <img class="language-maitrises img-fluid px-4" src="http://localhost/mon-blog/web/maitrises/js.png" alt="">
                            <img class="language-maitrises img-fluid px-4" src="http://localhost/mon-blog/web/maitrises/php.png" alt="">
                            <img class="language-maitrises img-fluid px-4" src="http://localhost/mon-blog/web/maitrises/mysql.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education & experience -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Éducation et experience</h2>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="bg-exp bg-exp-1 h-100">
                                <p class="year-exp mb-1">2016 - 2019</p>
                                <h3 class="mb-1">BTS Infographiste maquettiste</h3>
                                <p class="school-company m-0">INSIAG</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-exp bg-exp-2 h-100">
                                <p class="year-exp mb-1">2019</p>
                                <h3 class="mb-1">Infographiste maquettiste</h3>
                                <p class="school-company m-0">Newin Agency</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-exp bg-exp-3 h-100">
                                <p class="year-exp mb-1">2020 - 2021</p>
                                <h3 class="mb-1">Infographiste Webdesigner Ui / Ux Développeur web</h3>
                                <p class="school-company m-0">Luxuriance</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-exp bg-exp-4 h-100">
                                <p class="year-exp mb-1">2021 - 2023</p>
                                <h3 class="mb-1">Développeur d'applications PHP Symfony</h3>
                                <p class="school-company m-0">Komai</p>
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
                        foreach (array_slice($projects, 0, 4) as $project) {
                            ?>
                            <a class="col-lg-3 col-md-6 projet-btn" href="http://localhost/mon-blog/templates/front_office/projet.php?id=<?= $project['id'] ?>">
                                <img class="img-fluid img-project" src="./web/<?= $project['image']; ?>" alt="">
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

        <!-- Mes derniers articles -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Mes derniers articles</h2>
                    <div class="row g-3">
                        <?php
                        foreach(array_slice($posts, 0, 4) as $post) {
                            ?>
                            <a class="col-lg-3 col-md-6 projet-btn" href="http://localhost/mon-blog/templates/front_office/article.php?id=<?= $post['id'] ?>">
                                <img class="img-fluid img-project" src="./web/<?= $post['image']; ?>" alt="">
                                <div class="bg-under-project">
                                    <p class="year-exp mb-1">
                                        <?= ($post['work_type']); ?>
                                    </p>
                                    <h3 class="project-title mb-1">
                                        <?= ($post['title']); ?>
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
    <?php require('templates/front_office/footer.php');

    $content = ob_get_clean();

    require('templates/front_office/layout.php');?>


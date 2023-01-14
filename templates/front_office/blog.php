<?php
session_start();

$title = "Blog";

require('../../src/model/model.php');
require('../../src/controllers/blog/post.php');

$posts = getPosts();

require('../../src/controllers/check_user/check_role.php');

ob_start(); ?>

    <main>

        <!-- Header -->
        <section>
            <div class="container header-mb mt-4">
                <div class="bg-header">
                    <div class="row g-3 justify-content-center">
                        <?php
                        foreach (array_slice($posts, 0, 1) as $post) {
                            ?>
                            <div class="col-md-7 text-center">
                                <span class="newest-article"><?= ($post['work_type']); ?></span>
                                <h2 class="title-blog mb-4">
                                    <?= ($post['title']); ?>
                                </h2>
                                <div class="d-flex justify-content-center">
                                    <a class="btn-classic px-5" href="http://localhost/mon-blog/templates/front_office/article.php?id=<?= $post['id'] ?>">Lire l'article</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mes derniers projets -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Mes derniers articles</h2>
                    <div class="row g-3">
                        <?php
                        foreach (array_slice($posts, 1, 4) as $post) {
                            ?>
                            <a class="col-lg-3 col-md-6 projet-btn" href="http://localhost/mon-blog/templates/front_office/article.php?id=<?= $post['id'] ?>">
                                <img class="img-fluid img-project" src="../../web/<?= $post['image']; ?>" alt="">
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

        <!-- Tous mes projets -->
        <section>
            <div class="cont-spacer">
                <div class="container">
                    <h2 class="mb-5">Tout mes articles</h2>

                    <div class="row">
                        <div class="row gy-4 gx-3">
                            <?php
                            foreach (array_slice($posts, 5, 999999) as $post) {
                                ?>
                                <a class="col-lg-3 col-md-6 projet-btn"
                                   href="http://localhost/mon-blog/templates/front_office/article.php?id=<?= $post['id'] ?>">
                                    <img class="img-fluid img-project" src="../../web/<?= $post['image']; ?>" alt="">
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
            </div>
        </section>

    </main>

    <?php require('../front_office/footer.php');

    $content = ob_get_clean();

    require('../front_office/layout.php');?>

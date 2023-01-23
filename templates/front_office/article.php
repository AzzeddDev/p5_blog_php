<?php

session_start();

require '../../src/model/model.php';
require '../../src/controllers/blog/post.php';
require '../../src/controllers/public/add_comment.php';
require '../../src/controllers/public/commentaire.php';

$posts = getPosts();
$title = $post['title'];

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
                                <div class="mb-2"><p class="post-latest"><?= $post['date_post'] ?></p></div>
                                <h1 class="text-center pb-1"> <?= $post['title'] ?> </h1>

                                <?php while ($a = $author_name->fetch()) { ?>
                                    <div class="mb-2"><p class="post-latest">Publier par : <?= $a['pseudo'] ?></p></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Article -->
        <section>
            <div class="pt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 offset-md-1">
                            <div class="d-grid justify-content-center pt-1 mb-3 sticky-share">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-square social-icons-article"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet">
                                    <i class="fa-brands fa-twitter-square social-icons-article"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <img class="img-fluid rounded-3 mb-3" src="../../web/<?= $post['image'] ?>" alt="">
                            <p class="text-justify"> <?= $post['content'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comment section -->
        <section>
            <div class="pt-3 pb-5">
                <div class="container">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="comment-title mb-4">Comments</h2>

                        <?php while ($c = $commentaires->fetch()) { ?>
                            <?php if ($c['is_validate'] == 1) { ?>
                                <div class="bg-article d-flex mb-4">
                                    <div class="pe-3">
                                        <span class="input-group-user"><?= $c['pseudo'][0] ?></span>
                                    </div>

                                    <div class="">
                                        <h2 class="user-name"><?= $c['pseudo'] ?> :</h2>
                                        <span class="text-sm"><?= $c['commentaire'] ?></span>
                                        <span class="text-sm"><?= $c['is_validate'] ?></span>
                                        <p class="text-sm mb-1"></p>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if (isset($_SESSION['role_user'])) { ?>

                                <form name="add_comment" method="post" action="../../src/controllers/public/add_comment.php">
                                    <textarea class="form-control default-form mb-3" placeholder="Votre réponse" name="topic_reponse"></textarea>
                                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                    <input class="btn-classic px-5" type="submit" value="Commenter">
                                </form>

                        <?php }

                        else { ?>

                            <div class="d-flex justify-content-between bg-connect-comment">
                                <div class="col-md-8">
                                    <h2 class="text-start">Connectez-vous, et laisser moi un petit commentaire :D</h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-block">
                                        <a class="btn-classic px-5"
                                           href="http://localhost/mon-blog/templates/front_office/se-connecter.php">Connectez-vous</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

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
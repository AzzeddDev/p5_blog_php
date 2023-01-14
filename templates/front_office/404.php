<?php $title = "404 Erreur : Page introuvable"; ?>

<?php ob_start(); ?>

<div class="d-flex flex-column justify-content-center align-items-center page_not_found">
    <img class="img-fluid mario-404" src="http://localhost/mon-blog/web/404/mario-dead.gif" alt="">
    <h1>404 erreur : Page untrouvable</h1>
    <p class="mb-4">Désolé cette page est introuvable, ou peut etre qu'elle a été aspiré par un trou noir 🌌</p>
    <a class="btn-classic" href="http://localhost/mon-blog/index.php">Retour a l'acceuil</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('../../templates/front_office/layout.php') ?>
<?php

if(!isset($_SESSION))
{
    session_start();
}

require_once __DIR__ . "./../../../src/model/model.php";

if (isset($_POST['id'], $_POST['topic_reponse'])) {
    $get_id = htmlspecialchars($_POST['id']);
    $commentaire = htmlspecialchars($_POST['topic_reponse']);

    if (isset($_SESSION['id'])) {
        if (!empty($commentaire)) {
            $database = dbConnect();
            $ins = $database->prepare('INSERT INTO commentaires (id_article, id_membres, commentaire) VALUES (?, ?, ?)');
            $ins->execute(array($get_id, $_SESSION['id'], $commentaire));
            $reponse_msg = "Votre réponse a bien été postée";
            unset($reponse);
            header("Location: http://localhost/mon-blog/templates/front_office/article.php?id=" . $_POST['id']);
        } else {
            $reponse_msg = "Votre réponse ne peut pas être vide !";
        }
    }
} else {
    $reponse_msg = "Y a un probleme avec le message";
}
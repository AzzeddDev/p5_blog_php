<?php

if (isset($_SESSION['id'])) {
    $database = dbConnect();
    $commentaires = $database->prepare('SELECT * FROM commentaires WHERE id_membres = ? ORDER BY id DESC');
    $commentaires->execute(array($_SESSION['id']));
    if(isset($_GET['type']) AND $_GET['type'] == 'commentaire') {
        if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
            $supprime = (int) $_GET['supprime'];
            $req = $database->prepare('DELETE FROM commentaires WHERE id = ?');
            $req->execute(array($supprime));
            header('Location: http://localhost/mon-blog/templates/back_office/dashboard-user.php?=');
        }
    }
}
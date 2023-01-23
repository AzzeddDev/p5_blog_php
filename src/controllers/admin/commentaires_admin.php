<?php
if(isset($_SESSION['id'])) {
    $database = dbConnect();
    $reqadmin = $database->prepare("SELECT * FROM membres WHERE id = ?");
    $reqadmin->execute(array($_SESSION['id']));
    $user = $reqadmin->fetch();
    $commentaires = $database->prepare('SELECT c.*, m.pseudo FROM commentaires c JOIN membres m ON c.id_membres = m.id ORDER BY id DESC');
    $commentaires->execute();
    if(isset($_GET['type']) AND $_GET['type'] == 'commentaire') {
        if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
            $supprime = (int) $_GET['supprime'];
            $database = dbConnect();
            $req = $database->prepare('DELETE FROM commentaires WHERE id = ?');
            $req->execute(array($supprime));
            header('Location: http://localhost/mon-blog/templates/admin_office/commentaires.php?=');
        }

        // Probleme bouton valider DELETE->UPDATE = is_validate=from 0 to 1
        if(isset($_GET['validate']) AND !empty($_GET['validate'])) {
            $validate = $_GET['validate'];
            $database = dbConnect();
            $req = $database->prepare('UPDATE commentaires SET is_validate = 1 WHERE id = ? AND is_validate = 0');
            $req->execute(array($validate));
            header('Location: http://localhost/mon-blog/templates/admin_office/commentaires.php?=');
        }
    }
}
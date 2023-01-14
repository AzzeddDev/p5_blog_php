<?php
if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
        $supprime = (int) $_GET['supprime'];
        $database = dbConnect();
        $req = $database->prepare('DELETE FROM membres WHERE id = ?');
        $req->execute(array($supprime));
        header('Location: http://localhost/mon-blog/templates/admin_office/membres.php?=');
    }
}
$membres = $database->query('SELECT * FROM membres ORDER BY id DESC');
$commentaires = $database->query('SELECT * FROM commentaires ORDER BY id DESC');
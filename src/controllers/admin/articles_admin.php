<?php
if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    $database = dbConnect();
    if(isset($_GET['type']) AND $_GET['type'] == 'article') {
        if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
            $supprime = (int) $_GET['supprime'];
            $req = $database->prepare('DELETE FROM posts WHERE id = ?');
            $req->execute(array($supprime));
        }
    }
    $articles = $database->query('SELECT * FROM posts ORDER BY id DESC');
}
<?php

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $database = dbConnect();
    $getid = $_GET['id'];
    $commentaires = $database->prepare('SELECT c.*, m.pseudo FROM commentaires c JOIN membres m ON c.id_membres = m.id WHERE id_article = ? ORDER BY id DESC');
    $commentaires->execute(array($getid));
}
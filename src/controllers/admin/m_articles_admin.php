<?php

require_once __DIR__ . "./../../../src/model/model.php";

if(isset($_GET['id']) and !empty($_GET['id'])) {
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM posts WHERE id = ?");
    $statement->execute(array($_GET['id']));
    $post = $statement->fetch();
}

if(isset($_POST['id'] ,$_POST)) {
    $database = dbConnect();
    $get_id = htmlspecialchars($_POST['id']);
    if (isset($_POST['titre']) and !empty($_POST['titre']) and $_POST['titre'] != $post['titre']) {
        $newtitle = htmlspecialchars($_POST['titre']);
        $inserttitle = $database->prepare("UPDATE posts SET title = ?, date_post = NOW() WHERE id = ?");
        $inserttitle->execute(array($newtitle, $get_id));
        header('Location: http://localhost/mon-blog/templates/admin_office/article-modifs.php?id=' . $get_id);
    }
    if (isset($_POST['type']) and !empty($_POST['type']) and $_POST['type'] != $post['type']) {
        $newtype = htmlspecialchars($_POST['type']);
        $inserttype = $database->prepare("UPDATE posts SET work_type = ?, date_post = NOW() WHERE id = ?");
        $inserttype->execute(array($newtype, $get_id));
        header('Location: http://localhost/mon-blog/templates/admin_office/article-modifs.php?id=' . $get_id);
    }
    if (isset($_POST['contenu']) and !empty($_POST['contenu']) and $_POST['contenu'] != $post['contenu']) {
        $newcontent = htmlspecialchars($_POST['contenu']);
        $insertcontent = $database->prepare("UPDATE posts SET content = ?, date_post = NOW() WHERE id = ?");
        $insertcontent->execute(array($newcontent, $get_id));
        header('Location: http://localhost/mon-blog/templates/admin_office/article-modifs.php?id=' . $get_id);
    }
}
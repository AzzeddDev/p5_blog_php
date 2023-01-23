<?php
function getPosts() {

    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT * FROM `posts` ORDER BY id DESC"
    );
    $statement->execute();

    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'id' => $row['id'],
            'title' => $row['title'],
            'id_author' => $row['id_author'],
            'content' => $row['content'],
            'work_type' => $row ['work_type'],
            'image' => $row ['image']
        ];

        $posts[] = $post;
    }
    return $posts;
}

function getPost($id) {
    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT * FROM `posts` WHERE id = :id"
    );
    $statement->bindParam('id', $id, PDO::PARAM_INT);
    $statement->execute();

    $post = [];
    $post = $statement->fetch();
    return $post;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $post = getPost($_GET['id']);
}

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $database = dbConnect();
    $getid = $_GET['id'];
    $author_name = $database->prepare('SELECT p.*, m.pseudo FROM posts p JOIN membres m ON p.id_author = m.id WHERE p.id = ? ORDER BY id DESC');
    $author_name->execute(array($getid));
}
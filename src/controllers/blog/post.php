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
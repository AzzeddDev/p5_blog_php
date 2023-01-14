<?php
function getProjects() {

    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT * FROM `projects` ORDER BY id DESC"
    );
    $statement->execute();

    $projects = [];
    while (($row = $statement->fetch())) {
        $project = [
            'id' => $row['id'],
            'title' => $row['title'],
            'content' => $row['content'],
            'work_type' => $row ['work_type'],
            'image' => $row ['image'],
            'date_project' => $row ['date_project'],
        ];

        $projects[] = $project;
    }

    return $projects;
}

function getProjet($id) {

    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT * FROM `projects` WHERE id = :id"
    );
    $statement->bindParam('id', $id, PDO::PARAM_INT);
    $statement->execute();

    $projet = [];
    $projet = $statement->fetch();
    return $projet;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $projet = getProjet($_GET['id']);
}

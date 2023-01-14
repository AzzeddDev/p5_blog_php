<?php

// infos user
if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM membres WHERE id = ?");
    $statement->execute(array($_SESSION['id']));
    $user = $statement->fetch();

    $statement_i = $database->prepare("SELECT DISTINCT(LEFT(pseudo, 1)) AS initial FROM membres WHERE id = ?");
    $statement_i->execute(array($_SESSION['id']));
    $initial_user = $statement_i->fetch();
}
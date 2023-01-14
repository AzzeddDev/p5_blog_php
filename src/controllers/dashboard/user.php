<?php
if(isset($_SESSION['id'])) {
    $database = dbConnect();
    $requser = $database->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
}

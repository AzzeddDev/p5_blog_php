<?php

if(isset($_SESSION['id'])) {
    $database = dbConnect();
    if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $database->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: http://localhost/mon-blog/templates/admin_office/dashboard-admin-settings.php?=id' . $_SESSION['id']);
    }
    if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['mail']) {
        $newmail = filter_var($_POST['newmail'], FILTER_SANITIZE_EMAIL);
        $insertmail = $database->prepare("UPDATE membres SET mail = ? WHERE id = ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header('Location: http://localhost/mon-blog/templates/admin_office/dashboard-admin-settings.php?=id' . $_SESSION['id']);
    }
    if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2'])) {
        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);
        if ($mdp1 == $mdp2) {
            $insertmdp = $database->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            header('Location: http://localhost/mon-blog/templates/admin_office/dashboard-admin-settings.php?=id' . $_SESSION['id']);
        } else {
            $msg = "Vos deux mdp ne correspondent pas !";
        }
    }
}

else {
    require('index.php');
}
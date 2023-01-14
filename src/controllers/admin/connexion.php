<?php
$database = dbConnect();
if(isset($_POST['formconnexionadmin'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $database->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ? AND role_user = 1");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['role_user'] = $userinfo['role_user'];
            header("Location: http://localhost/mon-blog/templates/admin_office/dashboard-admin.php?id=".$_SESSION['role_user']);
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
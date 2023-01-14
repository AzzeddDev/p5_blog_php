<?php

if(isset($_SESSION['role_user'])) {

    //Header if i'm admin
    if($_SESSION['role_user']==1) { require(__DIR__ . './../../../templates/admin_office/header.php'); }

    //Header if i'm a user
    elseif ($_SESSION['role_user']==0) { require(__DIR__ . './../../../templates/back_office/header.php'); }

}

else { require(__DIR__ . './../../../templates/front_office/header.php'); }
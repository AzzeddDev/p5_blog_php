<?php

require_once (__DIR__ . './../../model/model.php');

if (isset($_POST)) {
    if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['work_type']) && isset($_POST['date_project']) && isset($_FILES['file'])) {
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        if (!empty($_POST['title']) and !empty($_POST['content']) and !empty($_POST['work_type']) and !empty($_POST['date_project']) and !empty($_FILES['file'])) {
            if ($_FILES['file']) {
                $database = dbConnect();
                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));

                $extensions = ['jpg', 'png', 'jpeg', 'gif', 'webp'];
                $maxSize = 1000000;

                if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {

                    $uniqueName = uniqid('', true);
                    //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                    $file = $uniqueName . "." . $extension;
                    //$file = 5f586bf96dcd38.73540086.jpg

                    //On stock le fichier dans le dossier du serveur
                    $filePath = '../web/projets/' . $file;

                    $path = ($filePath);

                    move_uploaded_file($tmpName, '../../../web/projets/' . $file);

                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $work_type = htmlspecialchars($_POST['work_type']);
                    $date_project = htmlspecialchars($_POST['date_project']);

                    $ins = $database->prepare('INSERT INTO projects (id, title, content, work_type, date_project, image) VALUES (NULL ,?, ?, ?, ?, ?)');
                    $ins->execute(array($title, $content, $work_type, $date_project, $path));
                    header("Location: http://localhost/mon-blog/templates/admin_office/r_projects.php?id=");
                    $message = 'Votre article a bien été posté';

                    echo "Image enregistrée";
                } else {
                    echo "Une erreur est survenue";
                }
            }
        }
    }
}

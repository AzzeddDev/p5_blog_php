<?php
if(isset($_GET['type']) AND $_GET['type'] == 'projet') {
    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
        $database = dbConnect();
        $supprime = (int) $_GET['supprime'];
        $req = $database->prepare('DELETE FROM projects WHERE id = ?');
        $req->execute(array($supprime));
    }
}
$projets = $database->query('SELECT * FROM projects ORDER BY id DESC');

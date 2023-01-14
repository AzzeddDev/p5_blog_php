<?php

function dbConnect()
{
    $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'mon-blog', 'root');

    return $database;
}
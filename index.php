<?php

require('src/model/model.php');
require('src/controllers/blog/post.php');
require('src/controllers/blog/projet.php');
require('src/controllers/public/contact.php');

$posts = getPosts();
$projects = getProjects();

require('templates/front_office/home.php');
<?php
// controllers/homepage.php

require_once('src/model.php');

function homepage()
{
    $posts = getPosts();

    require('templates/front_office/home.php');
}
<?php

require "functions.php";
require "router.php";
require "database.php";


$db = new database();
$posts = $db->query("SELECT * FROM posts");

foreach ($posts as $post) {
    echo "<p>" . $post['id'] . " | " . $post['title'] . "</p>";
}
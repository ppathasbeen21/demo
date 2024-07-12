<?php

require "functions.php";
require "router.php";
require "database.php";

$config = require "config.php";
$username = $config['database']['user'];
$password = $config['database']['password'];


$db = new database($config['database'], $username, $password);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

foreach ($posts as $post) {
    echo "<p>" . $post['id'] . " | " . $post['title'] . "</p>";
}
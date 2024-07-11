<?php

require "functions.php";
require "router.php";

/*connection to DB.
inicialização */

$dsn = "mysql:host=localhost;port=8000;dbname=demo;charset=utf8mb4";
$password = "secret"; // replace 'your_password' with the actual password

$pdo = new PDO($dsn, 'homestead', $password);

$statement = $pdo->prepare("select * from `posts`");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
<?php

require __DIR__ . '/functions.php'; // __DIR__ means Where is this current PHP file located? and the

//require __DIR__ . '/route/router.php'; // __DIR__ Where is this current PHP file located?


//connect to our database (MYSQL).

$dsn = "mysql:host=localhost;user=root;port=3306;dbname=learning_php;charset=utf8mb4"; // dsn mean data source name
$pdo = new PDO($dsn); // new instance save as pdo

$statement = $pdo -> prepare("select * from posts"); //preparing a new query

$statement->execute(); // this will execute the query you put

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);// this will fetch the result which is fetchAll result
                            // this PDO::FETCH_ASSOC means giving the result into an ASSOCIATIVE Array format rather than index

foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";// we loop them to display the result
}
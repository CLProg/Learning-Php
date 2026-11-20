<?php

require __DIR__ . '/functions.php'; // __DIR__ means Where is this current PHP file located? and the

//require __DIR__ . '/route/router.php'; // __DIR__ Where is this current PHP file located?

require __DIR__ .  '/Database.php';

//connect to our database (MYSQL).
// the -> called a Object Operator it is used to access the object's properties and methods


$db = new Database(); // we create an object db new instance of class which is Database
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);// we call the query method and it's parameter value
        // this will fetch the result which is fetchAll result
        // this PDO::FETCH_ASSOC means giving the result into an ASSOCIATIVE Array format rather than index; 

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";// we loop them to display the result
}
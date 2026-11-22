<?php


//connect to our database (MYSQL).
// the -> called a Object Operator it is used to access the object's properties and methods

class Database
{
    public $connection;

    public function __construct($config, $user = 'root', $pass = '') //__construct() automatically executes whenever you create a new object using new
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';'); //http_build_query is build in function that converts the associative array to URL Encoded query string
        // the '' is the separator, it look like this host=localhost;port=3306;dbname=learning_php;charset=utf8mb4

        $this->connection = new PDO($dsn, $user, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); // new object instance save as pdo
    }

    public function query($query) // we create a method name query and add a parameter
    {

        $statement = $this->connection->prepare($query); //preparing a new query

        $statement->execute(); // this will execute the query you put

        return $statement;
    }
}
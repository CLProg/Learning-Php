<?php


//connect to our database (MYSQL).
// the -> called a Object Operator it is used to access the object's properties and methods

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=learning_php;charset=utf8mb4"; // dsn mean data source name

        $this->connection = new PDO($dsn, 'root'); // new object instance save as pdo
    }

    public function query($query) // we create a method name query and add a parameter
    {

        $statement = $this->connection->prepare($query); //preparing a new query

        $statement->execute(); // this will execute the query you put

        return $statement;
    }
}
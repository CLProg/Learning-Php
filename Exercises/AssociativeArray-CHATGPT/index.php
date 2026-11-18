<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $books = [
        [
            "title" => "Clean Code",
            "author" => "Robert C. Martin",
            "year" => 2008,
            "publisher" => "Prentice Hall"
        ]
    ];

    echo "BOOK INFORMATION:\n";
    foreach($books[0] as $book => $value){ // this will loop the key($book) and the value ($value)
        echo "\t".ucfirst($book).": ".$value.PHP_EOL; //this is PHP_End Of Line
    }
    ?>
</body>
</html>
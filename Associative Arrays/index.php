<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Array</title>

    <style>
        a{
            text-decoration: none;
        }

    </style>
</head>
<body>

    <?php 
        $books = [
            [
                //this is the associative "title" contains the value of "Harry Potter"//
                "title" => "Harry Potter",
                "author" => "Carl Lorenz",
                "purchaseUrl" => "www.example1.com"
            ],

            [
                "title" => "Example Book",
                "author" => "Example Author",
                "purchaseUrl" => "www.example2.com"
            ]
        ]
    
    ?>
    <h1>Recommended Books</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <a href=<?= $book["purchaseUrl"]?>>
                <br><li>Title: <?= $book["title"] ?><br></li>Author: <?= $book["author"]?><br>
            </a>
        <?php endforeach ?>
    </ul>
</body>
</html>
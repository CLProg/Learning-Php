<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    $books = [
        [
            "name" => "Harry Potter",
            "author" => "Carl Lorenz",
            "releaseYear" => 2005,
            "purchaseUrl" => "about:blank"
        ],

        [
            "name" => "Hail Mary",
            "author" => "Andy Weir",
            "releaseYear" => 2021,
            "purchaseUrl" => "about:blank"
        ],

        [
            "name" => "The Martian",
            "author" => "Andy Weir",
            "releaseYear" => 2011,
            "purchaseUrl" => "about:blank"
        ]
    ];


    //Function                 Variable for author
    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if($book["author"] === $author){
                $filteredBooks[] = $book;
            }
        }


        return $filteredBooks;
    }

    ?>


    <h1>Recommended Books</h1>

    
    <ul>
                <!-- Syntax for calling function with parameter -->
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book): ?>
            <li>
                <a href=<?= $book["purchaseUrl"] ?>>
                    Title:
                    <?= $book["name"] ?> (<?= $book['releaseYear'] ?>) <br> Author:
                    <?= $book['author'] ?> <br><br>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
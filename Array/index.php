<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Array</title>
</head>
<body>

    <?php 
        $books = [
            "Harry Potter",
            "Hail Mary",
            "Animal Farm"
        ]
    
    ?>
    <h1>Recommended Books</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book?></li>
        <?php endforeach; ?> <!-- this is the end of foreach loop -->
    </ul>
</body>
</html>
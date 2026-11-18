<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambad Function</title>
</head>

<body>
    <h1>Lambad Function</h1>
    <ul>
        <?php foreach ($filteredItems as $item) : ?>
            <li>
                <a href="<?= $item['purchaseUrl'] ?>">
                    <?= $item['name']; ?> (<?= $item['releaseYear']?>) - By <?= $item['author']; ?>
                </a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>

</html>
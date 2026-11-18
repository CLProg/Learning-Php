<?php
//separate the php logic into html
$books = [
    [
        'name' => 'Example 1',
        'author' => 'Author 1',
        'releaseYear' => '1968',
        'purchaseUrl' => 'http://example.com'

    ],
    [
        'name' => 'Example 2',
        'author' => 'Author 2',
        'releaseYear' => '2021',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Example 3',
        'author' => 'Author 2',
        'releaseYear' => '2011',
        'purchaseUrl' => 'http://example.com'
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) { // the items is the $books in the FilteredItems or our Array set it as $item

        if ($fn($item)) { // the $fn is our anonymous function and the parameter is our Array which is $books
            $filteredItems[] = $item; //appending
        }

    }

    return $filteredItems;
};


$filteredItems = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
}); // we use anonymous function here 


require "index.view.php"; //this will have the access of index.view.php

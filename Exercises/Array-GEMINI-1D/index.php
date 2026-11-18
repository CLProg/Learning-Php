<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $product = [
    //     "name" => "keyboard",
    //     "price" => 1200,
    //     "on_sale" => true
    // ];


    // function applyDiscount($price){
    //     return $price = $price - ($price * 0.2) ;
    // }

    
    // if($product["on_sale"] == true){
    //     $newPrice = applyDiscount($product['price']);
    //     echo "The ".$product["name"]." is on sale! New Price ".number_format($newPrice,2); 
    // }
    // else{
    //     echo "The ".$product["name"]."is on sale! New Price ".$product["price"]; 
    // }
    
    /*-------------------------------------------------------------------------------*/

    $games = [
        "elden ring" => 59.99,
        "minecraft" => 29.99,
        "stardew valley" => 14.99,
        "tekken 8" => 69.99
    ];


    function convertToPeso($price){
        return $price *= 56;
    }

    echo "GAME STORE INVENTORY".PHP_EOL;
    echo "====================".PHP_EOL;

    foreach($games as $game => $value){
        $newPrice = convertToPeso($value);
        echo "Game: ".ucfirst($game)." | "."USD: ".$value." | "."PHP: ".number_format($newPrice,2).PHP_EOL;
    }
    
    echo "====================".PHP_EOL;
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $inventory = [
            "laptop" => ["price" => 800, "stock" => 5],
            "mouse"  => ["price" => 25,  "stock" => 12],
            "phone"  => ["price" => 500, "stock" => 3]
        ];


        function calculateValue($price, $quantity){
            return $price * $quantity;
        }

        function findStock($quantity){
            return ($quantity < 5) ? "(LOW STOCK)" : "";
        }

        $grandTotal = 0;
        echo "ELECTRONICS INVENTORY REPORT".PHP_EOL;
        echo "============================".PHP_EOL;
        foreach($inventory as $product => $stock){
            $p = $stock['price'];
            $q = $stock['stock'];
            $total = calculateValue($p, $q);
            $grandTotal += $total;
            $status = findStock($q);

            echo "ITEM: ".$product. " | ". "PRICE: ".number_format($p,2). " | ". "STOCK: ".$q." | "."TOTAL VALUE: ".number_format($total,2)." ".$status.PHP_EOL;
        }
        echo "============================".PHP_EOL;
        echo "GRAND TOTAL INVENTORY VALUE: ".number_format($grandTotal,2);
        
        ?>
</body>
</html>
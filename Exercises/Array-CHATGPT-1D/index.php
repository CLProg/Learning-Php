<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAY MO 1D</title>
</head>
<body>
    <?php
    // $grade = [
    //     "Alice" => 85,
    //     "Bob" => 78,
    //     "Charlie" => 92,
    //     "Diana" => 88
    // ];

    // function findTopStudent($students){
    //     $highest = max($students);
    //     $topStudent = array_search($highest, $students);

    //     return $topStudent;
    // }

    // function findLowestStudent($students){
    //     $lowest = min($students);
    //     $lowestStudent = array_search($lowest, $students);

    //     return $lowestStudent;
    // }

    // $highest = findTopStudent($grade);
    // $lowest = findLowestStudent($grade);

    // $highestGrade = $grade[$highest];
    // $lowestGrade  = $grade[$lowest];

    // foreach($grade as $name => $grades){
    //     echo $name." has a grade of ".$grades.PHP_EOL;
    // }

    // echo $highest." has Highest grade of ".$highestGrade.PHP_EOL;
    // echo $lowest." has Highest grade of ".$lowestGrade.PHP_EOL;
    

    $products = [
        "Shirt" => 500,
        "Shoes" => 1200,
        "Hat" => 250,
        "Bag" => 800
    ];

    function findExpensiveProduct($exp){
        $expensive = max($exp);
        $findExp = array_search($expensive, $exp);

        return $findExp;
    }

    $foundExp = findExpensiveProduct($products);

    foreach($products as $product => $price){
        echo "\t".$product." cost ".$price.PHP_EOL;
    }
    

    echo "Most Expensive product: ".$foundExp.PHP_EOL;
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // $snacks = [
    //     "popcorn" => 10,
    //     "soda" => 5,
    //     "pancake" => 8
    // ];
    
    // function calculateEarnings($unit){
    //     return $unit * 5.50;
    // }
    // $totalSales = 0;
    // foreach($snacks as $snack => $value){
    //     $earnings = calculateEarnings($value);
    //     $totalSales += $earnings;

    //     echo "Snack: ".ucfirst($snack)." | "."Units: ".$value." | "."Earnings: $".number_format($earnings,2).PHP_EOL;
    // }

    // echo "DAILY TOTAL SALES: ".number_format($totalSales,2).PHP_EOL;

    $carRental = [
        "toyota" => 10,
        "tesla" => 3,
    ];

    function calculateRental($days) {
    $total = $days * 45;
    return ($days > 7) ? $total - 20 : $total;
    }

    $totalRevenue = 0;

    foreach($carRental as $rental => $value){

        $temp = calculateRental($value);
        $totalRevenue += $temp;

        $status = ($value > 7) ? "DISCOUNTED APPLIED" : "";
        
        echo "Car: ".ucfirst($rental)." | ". "Days: ".number_format($value,2)." | "."Total: $".number_format($temp,2)." ".$status.PHP_EOL;
    }

    echo "TOTAL REVENUE: ".number_format($totalRevenue,2)
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYROLL</title>
</head>
<body>
    <?php
        $employees = [
            "carlos" => ["rate" => 50, "hours" => 40, "bugs" => 15],
            "maya"   => ["rate" => 60, "hours" => 45, "bugs" => 8],
            "liam"   => ["rate" => 45, "hours" => 38, "bugs" => 25]
        ];


        function calculateBasePay($rate, $hours){
            return $rate * $hours;
        }

        function checkBonus($hours, $bugs){
            return ($hours > 40 || $bugs > 20) ? 100 : 0;
        }

        $totalCompanyPayout = 0;

        foreach($employees as $base => $bonus){
            $basePay = calculateBasePay($bonus['rate'], $bonus['hours']);
            $bonusRate = checkBonus($bonus['hours'], $bonus['bugs']);

            $individualTotal = $basePay + $bonusRate;

            $totalCompanyPayout += $individualTotal;

            $status = ($bonusRate > 0) ? "BONUS AWARDED" : "";

            echo "NAME: ".ucfirst($base). " | ". "BASE: ".number_format($basePay,2)." | "."BONUS: ".number_format($bonusRate,2)." | "."TOTAL: ".number_format($individualTotal,2)." ".$status.PHP_EOL;
        };
        echo "=====================".PHP_EOL;
        echo "TOTAL PAYROLL COST: ".$totalCompanyPayout.PHP_EOL;
    ?>
</body>
</html>
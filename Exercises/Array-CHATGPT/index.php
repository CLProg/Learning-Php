<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAY MO</title>
</head>
<body>
    <?php

    const SERVICE_FEE = 5;
    $movies = [
        "standard" => 10,
        "imax"     => 15,
        "3d"       => 12
    ];

    function calculateTicketPrice($list, $type){
        $cleanType = strtolower(trim($type));
        
        return (isset($list[$cleanType])) ? $list[$cleanType] + SERVICE_FEE : "Invalid Movie Type"; ;
    }

    echo "Ticket for IMAX: ".calculateTicketPrice($movies, 'IMAX').PHP_EOL;
    echo "Ticket for VR: ".calculateTicketPrice($movies, 'VR').PHP_EOL;

    ?>
</body>
</html>
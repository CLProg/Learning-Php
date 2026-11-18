<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    $grade = [
        85,
        90,
        88,
        92,
        87
    ];

    function averageGrade($grade){
        $total = 0;
        foreach($grade as $grades){
            $total = array_sum($grade);
        }
        
        $average = $total / count($grade);
        return $average;
    }


    echo "Student Grade: ".averageGrade($grade);
    ?>
    
</body>
</html>
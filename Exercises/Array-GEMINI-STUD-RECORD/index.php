<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAY MO-GEMINI</title>
</head>
<body>
    <?php
    $students = [
        [
            "name" => "Carl",
            "attendance" => 98,
            "exam" => 98
        ],

        [
            "name" => "Cris",
            "attendance" => 90,
            "exam" => 80
        ],

        [
            "name" => "Papa",
            "attendance" => 79,
            "exam" => 88
        ],

        [
            "name" => "David",
            "attendance" => 50,
            "exam" => 50
        ]

    ];

    echo "Student Report Card" . PHP_EOL;
    echo "===================" . PHP_EOL;

    function calculateFinalGrade($att, $exam){
        return ($att * 0.3) + ($exam * 0.7);
    }

    foreach($students as $student){
        $finalGrade = calculateFinalGrade($student['attendance'], $student['exam']);

        echo "Name: ".ucfirst($student['name']).PHP_EOL;
        echo "Final Grade: ".number_format($finalGrade,2)."%".PHP_EOL;

        if ($finalGrade < 75) {
            echo "Status: FAILED" . PHP_EOL;
        } else {
            echo "Status: PASSED" . PHP_EOL;
        }
            echo "-------------------" . PHP_EOL;
    }
    ?>
</body>
</html>
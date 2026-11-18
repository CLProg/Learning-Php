<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = [
            "mark" => [
                "score" => 85,
                "attendance" => 95
            ],
            "jane" => [
                "score" => 72,
                "attendance" => 60
            ],
            "kevin" => [
                "score" => 90,
                "attendance" => 40
            ]   
        ];

        function evaluateStudent($score, $attendance){
            return ($score >= 80 && $attendance >= 70) ? "PASSED" : "FAILED";
        }

        foreach($students as $name => $info){
            $s = $info['score'];
            $a = $info['attendance'];

            $status = evaluateStudent($s, $a);

            echo "STUDENT: ".$name. " | " . "SCORE: ". $s ." | "."ATTENDANCE: ".$a."%"." | ". "STATUS: ".$status. PHP_EOL;
        }
    ?>
</body>
</html>
// Creating API

<?php

header("Content-type: application/json");

if($_SERVER['REQUEST_METHOD'] !== "GET"){
    http_response_code(404);
    echo json_encode (["Error" => "Method not allowed"]);
    exit;
};
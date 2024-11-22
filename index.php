<?php
use General\Utils;
require_once "./utils.php";

if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    $min = isset($_GET["min"]) ? (int) ($_GET['min']) : 1;
    $max = isset($_GET["max"]) ? (int) ($_GET['max']) : 100;

    if ($min > $max) {
        http_response_code(400);
        echo json_encode(["error" => "min value must be less than max value"]);
        exit;
    }

    $result = Utils::getSecureRandom($min, $max);

    echo json_encode(["random_number" => $result]);

} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}



?>
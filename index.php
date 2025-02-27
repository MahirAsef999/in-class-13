<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_GET['message'])) {
    include 'homework-13-question6.html';
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['message'])) {
    echo json_encode(["message" => "Hello I am talking from the PHP back end :)"]);
} else {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
}
?>

<?php



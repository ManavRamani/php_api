<?php
require_once 'screen_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = $_POST['name'];

    if (insertScreen($name)) {
        echo json_encode(array("message" => "Screen added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add screen"));
    }
}
?>
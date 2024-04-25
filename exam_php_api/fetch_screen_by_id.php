<?php
require_once 'screen_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $screen = fetchScreenById($id);
    if ($screen) {
        echo json_encode($screen);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Screen not found"));
    }
}
?>
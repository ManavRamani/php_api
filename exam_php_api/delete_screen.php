<?php
require_once 'screen_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deleteScreen($id)) {
        echo json_encode(array("message" => "Screen deleted successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to delete screen"));
    }
}
?>
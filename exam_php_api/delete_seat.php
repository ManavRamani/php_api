<?php
require_once 'seat_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deleteSeat($id)) {
        echo json_encode(array("message" => "Seat deleted successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to delete seat"));
    }
}
?>
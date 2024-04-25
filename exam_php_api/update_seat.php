<?php
require_once 'seat_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['screen_id']) && isset($_POST['seat_number'])) {
    $id = $_GET['id'];
    $screen_id = $_POST['screen_id']; 
    $seat_number = $_POST['seat_number'];
    if (updateSeat($id, $screen_id, $seat_number)) {
        echo json_encode(array("message" => "Seat updated successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to update seat"));
    }
}
?>
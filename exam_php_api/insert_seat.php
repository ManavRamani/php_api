<?php
require_once 'seat_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['screen_id']) && isset($_POST['seat_number'])) {
    $screen_id = $_POST['screen_id'];
    $seat_number = $_POST['seat_number'];

    if (insertSeat($screen_id, $seat_number)) {
        echo json_encode(array("message" => "Seat added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add seat"));
    }
}
?>
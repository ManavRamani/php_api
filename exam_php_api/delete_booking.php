<?php
require_once 'booking_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deleteBooking($id)) {
        echo json_encode(array("message" => "Booking deleted successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to delete booking"));
    }
}
?>
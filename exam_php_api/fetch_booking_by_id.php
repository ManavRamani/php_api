<?php
require_once 'booking_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $booking = fetchBookingById($id);
    if ($booking) {
        echo json_encode($booking);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Booking not found"));
    }
}
?>
<?php
require_once 'booking_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['user_id']) && isset($_POST['showtime_id']) && isset($_POST['seats_booked'])) {
    $id = $_GET['id'];
    $user_id = $_POST['user_id']; 
    $showtime_id = $_POST['showtime_id'];
    $seats_booked = $_POST['seats_booked'];
    if (updateBooking($id, $user_id, $showtime_id, $seats_booked)) {
        echo json_encode(array("message" => "Booking updated successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to update booking"));
    }
}
?>
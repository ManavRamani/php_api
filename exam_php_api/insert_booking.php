<?php
require_once 'booking_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id']) && isset($_POST['showtime_id']) && isset($_POST['seats_booked'])) {
    $user_id = $_POST['user_id'];
    $showtime_id = $_POST['showtime_id'];
    $seats_booked = $_POST['seats_booked'];

    if (insertBooking($user_id, $showtime_id, $seats_booked)) {
        echo json_encode(array("message" => "Booking added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add booking"));
    }
}
?>
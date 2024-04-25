<?php
require_once 'booking_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $bookings = fetchAllBookings();
    echo json_encode($bookings);
}
?>
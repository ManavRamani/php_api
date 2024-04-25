<?php
require_once 'seat_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $seats = fetchAllSeats();
    echo json_encode($seats);
}
?>
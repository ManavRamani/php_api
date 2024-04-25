<?php
require_once 'showtime_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $showtimes = fetchAllShowtimes();
    echo json_encode($showtimes);
}
?>
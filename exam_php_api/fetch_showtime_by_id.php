<?php
require_once 'showtime_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $showtime = fetchShowtimeById($id);
    if ($showtime) {
        echo json_encode($showtime);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Showtime not found"));
    }
}
?>
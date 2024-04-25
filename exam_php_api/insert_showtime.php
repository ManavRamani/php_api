<?php
require_once 'showtime_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['movie_id']) && isset($_POST['screen_id']) && isset($_POST['time'])) {
    $movie_id = $_POST['movie_id'];
    $screen_id = $_POST['screen_id'];
    $time = $_POST['time'];

    if (insertShowtime($movie_id, $screen_id, $time)) {
        echo json_encode(array("message" => "Showtime added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add showtime"));
    }
}
?>
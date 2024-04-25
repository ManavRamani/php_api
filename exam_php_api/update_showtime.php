<?php
require_once 'showtime_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['movie_id']) && isset($_POST['screen_id']) && isset($_POST['time'])) {
    $id = $_GET['id'];
    $movie_id = $_POST['movie_id']; 
    $screen_id = $_POST['screen_id'];
    $time = $_POST['time'];
    if (updateShowtime($id, $movie_id, $screen_id, $time)) {
        echo json_encode(array("message" => "Showtime updated successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to update showtime"));
    }
}
?>
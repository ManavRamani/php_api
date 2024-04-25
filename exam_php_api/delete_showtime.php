<?php
require_once 'showtime_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deleteShowtime($id)) {
        echo json_encode(array("message" => "Showtime deleted successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to delete showtime"));
    }
}
?>
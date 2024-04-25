<?php
require_once 'seat_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $seat = fetchSeatById($id);
    if ($seat) {
        echo json_encode($seat);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Seat not found"));
    }
}
?>
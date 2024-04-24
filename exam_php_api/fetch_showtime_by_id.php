<?php
require_once 'user_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = fetchShowtimeById($id);
    if ($user) {
        echo json_encode($user);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "User not found"));
    }
}
?>

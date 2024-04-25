<?php
require_once 'movie_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (deleteMovie($id)) {
        echo json_encode(array("message" => "Movie deleted successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to delete movie"));
    }
}
?>
<?php
require_once 'movie_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $movie = fetchMovieById($id);
    if ($movie) {
        echo json_encode($movie);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Movie not found"));
    }
}
?>  
<?php
require_once 'movie_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['release_date']) && isset($_POST['duration'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $duration = $_POST['duration'];

    if (insertMovie($title, $description, $release_date, $duration)) {
        echo json_encode(array("message" => "Movie added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add movie"));
    }
}
?>
<?php
require_once 'movie_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['release_date']) && isset($_POST['duration'])) {
    $id = $_GET['id'];
    $title = $_POST['title']; 
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $duration = $_POST['duration'];
    if (updateMovie($id, $title, $description, $release_date, $duration)) {
        echo json_encode(array("message" => "Movie updated successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to update movie"));
    }
}
?>
<?php
require_once 'movie_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $movies = fetchAllMovies();
    echo json_encode($movies);
}
?>
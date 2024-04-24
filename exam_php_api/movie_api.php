<?php 
require_once './connection_db/conn.php';

//-------------------------
//Movies
function getAllMovies() {
    global $conn;
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    $movies = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }
    return $movies;
}

function fetchMovieById($id) {
    global $conn;
    $sql = "SELECT * FROM movies WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function deleteMovie($id) {
    global $conn;
    $sql = "DELETE FROM movies WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>
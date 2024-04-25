<?php 
require_once './connection_db/conn.php';

// Movies
function fetchAllMovies() {
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

function insertMovie($title, $description, $release_date, $duration) {
    global $conn;
    $sql = "INSERT INTO movies (title, description, release_date, duration) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $description, $release_date, $duration);
    return $stmt->execute();
}

function updateMovie($id, $title, $description, $release_date, $duration) {
    global $conn;
    $sql = "UPDATE movies SET title=?, description=?, release_date=?, duration=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssii", $title, $description, $release_date, $duration, $id);
    return $stmt->execute();
}

function deleteMovie($id) {
    global $conn;
    $sql_check_fk = "SELECT COUNT(*) as count FROM showtimes WHERE movie_id=?";
    $stmt_check_fk = $conn->prepare($sql_check_fk);
    $stmt_check_fk->bind_param("i", $id);
    $stmt_check_fk->execute();
    $result_check_fk = $stmt_check_fk->get_result();
    $row = $result_check_fk->fetch_assoc();
    if ($row['count'] > 0) {
        return false; 
    }

    $sql = "DELETE FROM movies WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>

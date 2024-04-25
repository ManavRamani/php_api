<?php 
require_once './connection_db/conn.php';

// Showtimes
function fetchAllShowtimes() {
    global $conn;
    $sql = "SELECT * FROM showtimes";
    $result = $conn->query($sql);
    $showtimes = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $showtimes[] = $row;
        }
    }
    return $showtimes;
}

function fetchShowtimeById($id) {
    global $conn;
    $sql = "SELECT * FROM showtimes WHERE id=?";
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

function insertShowtime($movie_id, $screen_id, $time) {
    global $conn;
    $sql = "INSERT INTO showtimes (movie_id, screen_id, time) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $movie_id, $screen_id, $time);
    return $stmt->execute();
}

function updateShowtime($id, $movie_id, $screen_id, $time) {
    global $conn;
    $sql = "UPDATE showtimes SET movie_id=?, screen_id=?, time=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisi", $movie_id, $screen_id, $time, $id);
    return $stmt->execute();
}

function deleteShowtime($id) {
    global $conn;
    $sql = "DELETE FROM showtimes WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>

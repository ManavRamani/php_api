<?php 
require_once './connection_db/conn.php';


// Showtimes
function getAllShowtimes() {
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

function deleteShowtime($id) {
    global $conn;
    $sql = "DELETE FROM showtimes WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>
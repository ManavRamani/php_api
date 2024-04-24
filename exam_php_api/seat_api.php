<?php
require_once './connection_db/conn.php';


// Seats
function getAllSeats() {
    global $conn;
    $sql = "SELECT * FROM seats";
    $result = $conn->query($sql);
    $seats = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $seats[] = $row;
        }
    }
    return $seats;
}

function fetchSeatById($id) {
    global $conn;
    $sql = "SELECT * FROM seats WHERE id=?";
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

function deleteSeat($id) {
    global $conn;
    $sql = "DELETE FROM seatss WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>
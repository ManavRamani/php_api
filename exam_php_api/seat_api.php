<?php
require_once './connection_db/conn.php';

// Seats
function fetchAllSeats() {
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

function insertSeat($screen_id, $seat_number) {
    global $conn;
    $sql = "INSERT INTO seats (screen_id, seat_number) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $screen_id, $seat_number);
    return $stmt->execute();
}

function updateSeat($id, $screen_id, $seat_number) {
    global $conn;
    $sql = "UPDATE seats SET screen_id=?, seat_number=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $screen_id, $seat_number, $id);
    return $stmt->execute();
}

function deleteSeat($id) {
    global $conn;
    $sql = "DELETE FROM seats WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>

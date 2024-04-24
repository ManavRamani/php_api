<?php

require_once './connection_db/conn.php';

// Bookings
function getAllBookings() {
    global $conn;
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);
    $bookings = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
    }
    return $bookings;
}

function fetchBookingById($id) {
    global $conn;
    $sql = "SELECT * FROM bookings WHERE id=?";
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

function deleteBooking($id) {
    global $conn;
    $sql = "DELETE FROM bookings WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>
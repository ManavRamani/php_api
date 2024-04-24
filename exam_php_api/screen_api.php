<?php
require_once './connection_db/conn.php';


//-------------------------
// Screens
function getAllScreens() {
    global $conn;
    $sql = "SELECT * FROM screens";
    $result = $conn->query($sql);
    $screens = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $screens[] = $row;
        }
    }
    return $screens;
}

function fetchScreenById($id) {
    global $conn;
    $sql = "SELECT * FROM screens WHERE id=?";
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

function deleteScreen($id) {
    global $conn;
    $sql = "DELETE FROM screens WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>

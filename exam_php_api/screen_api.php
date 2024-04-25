<?php
require_once './connection_db/conn.php';

// Screens
function fetchAllScreens() {
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

function insertScreen($name) {
    global $conn;
    $sql = "INSERT INTO screens (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    return $stmt->execute();
}

function updateScreen($id, $name) {
    global $conn;
    $sql = "UPDATE screens SET name=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $name, $id);
    return $stmt->execute();
}

function deleteScreen($id) {
    global $conn;
    // Check foreign key constraints before delete
    $sql_check_fk = "SELECT COUNT(*) as count FROM showtimes WHERE screen_id=?";
    $stmt_check_fk = $conn->prepare($sql_check_fk);
    $stmt_check_fk->bind_param("i", $id);
    $stmt_check_fk->execute();
    $result_check_fk = $stmt_check_fk->get_result();
    $row = $result_check_fk->fetch_assoc();
    if ($row['count'] > 0) {
        return false;
    }

    $sql = "DELETE FROM screens WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>

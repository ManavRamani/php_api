<?php
require_once './connection_db/conn.php';

//-------------------------
// Users
function fetchAllUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

function fetchUserById($id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id=?";
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

function insertUser($username, $email, $password) {
    global $conn;
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    return $stmt->execute();
}

function updateUser($id, $username, $password) {
    global $conn;
    $sql = "UPDATE users SET name=$username, password=$password WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $password, $id);
    return $stmt->execute();
}

function deleteUser($id) {
    global $conn;
    $sql_check_fk = "SELECT COUNT(*) as count FROM bookings WHERE user_id=?";
    $stmt_check_fk = $conn->prepare($sql_check_fk);
    $stmt_check_fk->bind_param("i", $id);
    $stmt_check_fk->execute();
    $result_check_fk = $stmt_check_fk->get_result();
    $row = $result_check_fk->fetch_assoc();
    if ($row['count'] > 0) {
        return false;
    }

    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>

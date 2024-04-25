<?php
    require_once 'user_api.php';

    if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['username']) && isset($_POST['password'])) {
        $id = $_GET['id'];
        $username = $_POST['username']; 
        $password = $_POST['password'];
        if (updateUser($id, $username, $password)) {
            echo json_encode(array("message" => "User updated successfully"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Failed to update user"));
        }
    }
?>

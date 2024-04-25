<?php
require_once 'user_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (insertUser($username, $email, $password)) {
        echo json_encode(array("message" => "User added successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to add user"));
    }
}
?>

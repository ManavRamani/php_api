<?php
    require_once 'user_api.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $users = fetchAllUsers();
        echo json_encode($users);
    }
?>

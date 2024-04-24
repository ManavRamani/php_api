<?php
    require_once 'user_api.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $users = getAllScreens();
        echo json_encode($users);
    }
?>

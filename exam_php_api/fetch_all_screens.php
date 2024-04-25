<?php
require_once 'screen_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $screens = fetchAllScreens();
    echo json_encode($screens);
}
?>
<?php
require_once 'screen_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id']) && isset($_POST['name'])) {
    $id = $_GET['id'];
    $name = $_POST['name']; 
    if (updateScreen($id, $name)) {
        echo json_encode(array("message" => "Screen updated successfully"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to update screen"));
    }
}
?>
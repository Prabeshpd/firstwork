<?php
header("Access-Contro-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");
require_once("init.php");

$database = new Database();
$user_read = User::find_by_id(2);
//$r = isset($_GET['user_id']) ? $_GET['user_id'] : die();


    $product_item = array(
        "first_name" => $user_read->first_name,
        "last_name" => $user_read->last_name,
        "email" => $user_read->email,
        "password" => $user_read->password,
        "phone" => $user_read->phone,
        "no_of_days" => $user_read->no_of_days
    );
    echo json_encode($product_item);

?>
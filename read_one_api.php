<?php
header("Access-Contro-Allow-Origin: *");
header("Content-Type: application/json");
require_once("init.php");

$database = new Database();
$user_read = new User();
$user_read->find_user_by_id(2);
//$r = isset($_GET['user_id']) ? $_GET['user_id'] : die();
$single_item = array(

    "first_name" => $user_read->first_name,
    "last_name" => $user_read->last_name,
    "email" => $user_read->email,
    "password" => $user_read->password,
    "phone" => $user_read->phone,
    "no_of_days" => $user_read->no_of_days
);

print_r(json_encode($single_item));


?>
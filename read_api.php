<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Accept: application/json");
header("Access-Control-Allow-Methods: GET");
include_once("init.php");

$database = new Database();
$user_read = User::find_all();


foreach ($user_read as $users){
    $product_item = array(
        "id" => $users->user_id,
        "first_name" => $users->first_name,
        "last_name" => $users->last_name,
        "email" => $users->email,
        "password" => $users->password,
        "phone" => $users->phone,
        "no_of_days" => $users->no_of_days
    );
    echo json_encode($product_item);
}

<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

include_once("init.php");

$database = new Database();
$user_read = User::find_all();

$posts_arr = array();
$posts_arr['data'] = array();
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
    array_push($posts_arr['data'], $product_item);

}
echo json_encode($posts_arr);

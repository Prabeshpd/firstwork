<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access_Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once ("init.php");

$database = new Database();
$user_api_create = new User();
$data  = json_decode(file_get_contents("php://input"));


$user_api_create->first_name = $data->first_name;
$user_api_create->last_name = $data->last_name;
$user_api_create->email = $data->email;
$user_api_create->password = $data->password;
$user_api_create->phone = $data->phone;
$user_api_create->no_of_days = $data->no_of_days;
$user_api_create->save();




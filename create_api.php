<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; characterset=UTF-8");
header("Access_Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once ("init.php");

$database = new Database();
$user_api_create = new User();

$data = json_decode(file_get_contents("php::/input"));


$user_api_create->user_id = $data->user_id;
$user_api_create->first_name = $data->first_name;
$user_api_create->last_name = $data->last_name;
$user_api_create->email = $data->email;
$user_api_create->password = $data->password;
$user_api_create->no_of_days = $data->no_of_days;

if($user_api_create->create()){
  echo '{';
  echo '"message" : "product ws created"';
  echo '}';
}
else{
    echo '{';
    echo '"message" : "unable to create" ';
    echo '}';
}

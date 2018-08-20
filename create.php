<?php require_once("init.php");
?>

<?php

if (isset($_POST['submit'])){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email_id']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone_no']);
    $day = $_POST['days'];
    $no_of_days = "";
    foreach ($day as $number){
        $no_of_days .= $number . ",";
    }


    $user = new User();
    $user->first_name = $first_name;
    $user->last_name = $last_name;
    $user->email = $email;
    $user->password = $password;
    $user->phone = $phone;
    $user->no_of_days = $no_of_days;
    $user->save();




}


//$user = new User();
//$user->first_name = "findss";
//$user->save();



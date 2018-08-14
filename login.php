<?php require_once("init.php"); ?>
<?php
if ($session->is_signed_in()){
    redirect("admin.php");
}
if (isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $user_found = User::verify_user($email,$password);
    if($user_found){
        $session->login($user_found);
        redirect("admin.php");
    }
    else{
        $the_message = "your message or password is incorrect";
    }
}
else{
    $the_message = '';
    $email = '';
    $password = '';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>form</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for ="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id = "password" name="password">
        </div>
        <button class="btn btn-outline-primary" type="login" value = "login" name="login">Login</button>
    </form>
</div>


</body>
</html>
<?php
echo $session->is_signed_in();
?>
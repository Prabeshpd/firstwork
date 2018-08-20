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
    <link rel="stylesheet" href="design.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>form</title>
</head>
<body id="LoginForm">



<div class="container">
    <h1 class="form-heading">Login Form</h1>
    <div class="login-form">
        <div class="main-div">
            <div class="pannel">
                <h2>Admin Login</h2>
                <p>Please enter your email and password</p>
            </div>
            <form action="" method="post" id="login">
                <div class="container">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>

        <button type="login" value="login" name="login" class="btn btn-primary">Login</button>
    </form>
        </div>
    </div>
</div>



</body>
</html>
<?php
echo $session->is_signed_in();
?>
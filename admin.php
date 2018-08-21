<?php
require_once("init.php"); ?>

<?php
if(!$session->is_signed_in()){
    redirect("login.php");
}
?>
<?php
$user = User::find_all();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


    <title>admin</title>



</head>
<body>
<h3 class="pannel">ADMIN PAGE</h3>


<div class="container">
    <div id="offset" >
    <table class="table table-hover"  id="tblExportData" >
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone no</th>
            <th>No. Of Planned Days To Stay</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($user as $us) : ?>
<tr>
    <td><?php echo $us->user_id ?></td>
    <td><?php echo $us->first_name ?></td>
    <td><?php echo $us->last_name ?></td>
    <td><?php echo $us->email ?></td>
    <td><?php echo $us->password ?></td>
    <td><?php echo $us->phone ?></td>
    <td><?php echo $us->no_of_days ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
    </div>
</div>
<form method="post" action="">
<div align="center">
    <button  class="btn btn-success" type ="export_table" name="export_table" value="export_table">Export Table Data To Excel File</button>
</div>
    <br />
    <br />
    <div align="center">
        <a class="btn btn-primary btn-lg" href="logout.php" role="button">logout</a>
    </div>
</form>
<?php
if(isset($_POST['export_table'])){
redirect("export_table.php");
}
?>



</body>
</html>

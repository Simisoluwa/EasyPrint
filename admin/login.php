<?php 
session_start();

include("includes/connection.php");

if(isset($_SESSION['admin_email'])){
    echo "<script>window.open('index.php?dashboard','_self')</script>";
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

 
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="form-login">
            <h2 class="form-login-heading">Admin Login</h2>
            <input type="text" class="form-control" name="admin_email" placeholder="Email">
            <input type="password" class="form-control" name="admin_pass" placeholder="Password">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">
                Log In
            </button>
        </form>
    </div>
          
</body>
</html>

<?php
if(isset($_POST['admin_login'])){
    $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
    $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
    $select_admin = "select * from admins where admin_email='$admin_email' AND 
    admin_pass='$admin_pass'";
    $run_admin = mysqli_query($con,$select_admin);
    $count_admin = mysqli_num_rows($run_admin);
    if($count_admin == 1){
        $_SESSION['admin_email'] = $admin_email;
        echo "<script>alert('You are logged in into admin panel')</script>";
        echo "<script>window.open('index.php?dashboard','')</script>";
    }
    else{
        echo "<script>alert('Email or password is wrong')</script>";
    }
}


?>
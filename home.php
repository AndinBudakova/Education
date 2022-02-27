<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in first";
  header("location:loginadmin.php");
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: loginadmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <a href="logout.php">Log out</a>
</body>
</html>

<?php 
?>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first";
        header("location:home.php");
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

        
        table, th, tr{
            border: 1px solid #ddd;
        }
        
        th {
            text-align: left;
            padding: 8px;
        }
        td {
            background-color: #D6EEEE;
        }
        .buton{
            font-size:25px;
            float: right;
            margin-top: -70px;
        
        }
    </style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <button class="buton"><a  href="logout.php">Log out</a></button>
    <br><br>
    <table class="table" style= "border-collapse; collapse; width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        include_once('db.php');
        $query = $db->query("SELECT * FROM users");
        while($row = $query->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "</tr>";
        }
    ?>
<table class="table" style= "border-collapse; collapse; width: 100%;">
    <thead>
        <tr>
            <th>cid</th>
            <th>Username</th>
            <th>Date</th>
            <th>Message</th>
        </tr>
    </thead>
<br><br>
<tbody>
    <?php
        include_once('db.php');
        $query = $db->query("SELECT * FROM comments");
        while($row = $query->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['cid']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['message']."</td>";
            echo "</tr>";
        }
    ?>
</body>
</html>
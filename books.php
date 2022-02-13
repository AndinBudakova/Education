<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>





<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="footer.css"/>
    <link rel="stylesheet" type="text/css" href="books.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
</head>

<body>
<div style="background-color: white">

<!-- pasi ska gabime useri eshte logged in edhe shfaqe mesazhi success -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <!-- informatat e userit qe eshte logged in -->
    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2 style="margin-left: 50px; padding-top: 20px;">Welcome <strong><em><?php echo $_SESSION['username']; ?></em></strong>
        </h2>
    	<button style="float: right; margin-right: 50px; background-color: lightgreen;">
            <a href="books.php?logout='1'" style="color: #000000; text-decoration: none;">Log out</a>
        </button>
    <?php endif ?>

  

<?php
    echo "<br/><br/><br/><br/><br/>";

    include ('footer.php');
?>
</div>
</body>
</html>

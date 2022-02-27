<?php 
session_start();
if(isset($_SESSION['username'])){
 header("location:home.php");
}else{


?>
<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    
</head>
<body style="width:1024px; margin:auto; background-color: #c6ecc6;" >
    
    <div style="background-color: white">
    <header>
    <?php include("header.php");?>
    </header>
    
     <!--********************** LOGIN MODAL ********************* -->
     <div id="id01" class="modal"> 

<!-- ************ MODAL CONTENT ************* -->
<form class="modal-content animate" method="post" action="loginadmin.php">
    <div style="padding: 0px; margin: 5%">
        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Admin Login</b></p>


        <br>
        <div>
           
            <input type="text" placeholder="Username" name="username" >
          
            <input type="password" placeholder="Password" name="password"  >
      
            <button id="logInButton" type="submit" name="loginBtn">Login</button>
             
        </div>
    </div>
</form>
<?php 
    require_once 'loginValidate.php';
    ?>
<!-- ************** MODAL CONTENT END ************** -->
  </div> 
<!--********************** LOGIN MODAL END ********************* -->
    
    <footer>
    <?php include("footer.php")?>
    </footer>
</div>
        </body>
</html>
<?php
}
?>
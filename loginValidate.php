<?php
   if(isset($_POST['loginBtn'])){
       if(empty($_POST['username']) || empty($_POST['password'])){
           echo "Fill all fields!";
       }else{
           $username = $_POST['username'];
           $password = $_POST['password'];

           

           include_once 'users.php';

               if($username == $user['username'] && $password == $user['password']){
            
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   $_SESSION['role'] = $user['role'];
            

               }else{
                   
                    echo "Incorrect Username or Password!";
                    exit();
                   }
                   
               }
           
       }
   
    
?>
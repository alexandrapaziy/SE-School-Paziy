<?php
session_start();
session_destroy();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>bitcoin</title>
     <link rel="stylesheet" href="style.css" type="text/css">	 
</head>
<body>
   
   <form action="sign_up_action.php" method="POST">
	   <input type="email" name="email" placeholder="enter e-mail">
	   <input type="password" name="pass" placeholder="enter password">
	   <input type="password" name="cpass" placeholder="confirm password">
	   <button type="submit">sign up</button>
	   <p>
	   do you have an account? -  
	   <a href="/">sign in</a>
	   </p>
	   
	   <p class="mistake">
	   <?php 
	   echo $_SESSION['msgg'];
	   unset($_SESSION['msgg']);
	   ?>  
	   </p>
	   
   </form>


</body>
</html>


<?php
session_start();
unset($_SESSION['user']);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>bitcoin</title>
     <link rel="stylesheet" href="style.css" type="text/css">	 
</head>
<body>
   
   <form action="sign_in_action.php" method="POST">
	   <input type="email" name="email" placeholder="enter e-mail">
	   <input type="password" name="pass" placeholder="enter password">
	   <button type="submit">sign in</button>
	   <p>
	   don't have an account? -  
	   <a href="sign_up.php">sing up</a>
	   </p> 
	   
	   <p class="mistake">
	   <?php 
	   echo $_SESSION['msg'];
	   unset($_SESSION['msg']);
	   ?>  
	   </p>
	   
   </form>


</body>
</html>


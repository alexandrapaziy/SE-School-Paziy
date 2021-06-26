<?php
session_start();
if(empty($_SESSION['user'])){
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>bitcoin</title>
     <link rel="stylesheet" href="style.css" type="text/css">	 
</head>
<body>
   
  
	   <p>
	   it is bitcoin rate page :)   
	  
	   <br><br>
	   
	   1 btc = 
	   <?php
	   $data = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/btc-uah"));
       $price = $data->ticker->price;
       echo $price;
	   ?>
	    uah
		
	    <br><br>
		
	    <a href="/">back to autorisation</a>	
	   </p>


</body>
</html>


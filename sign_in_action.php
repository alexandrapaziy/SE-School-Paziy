<?php
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];

if(!empty($email) && !empty($pass)){

$array = file('users.txt', FILE_IGNORE_NEW_LINES);
$quant = count($array);
for($i = 0; $i < $quant; $i++){
	$line = $array[$i];
    $tmp = explode(' ', $line);
    $arr[$tmp[0]] = $tmp[1];
}
if($arr[$email] == $pass){
	header ('Location: bitcoin_rate.php');
	$_SESSION['user'] = $email;
    exit();
	
}else{
	$_SESSION['msg'] = 'something went wrong :( check your data and try again';
    header('Location: index.php');
	exit();
}
}else{
	$_SESSION['msg'] = 'please fill in all fields';
    header('Location: index.php');
	exit();
}

?>

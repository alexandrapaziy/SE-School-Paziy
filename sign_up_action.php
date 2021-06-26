<?php
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if(!empty($email) && !empty($pass) && !empty($cpass)){

$array = file('users.txt', FILE_IGNORE_NEW_LINES);

$quant = count($array);
for($i = 0; $i < $quant; $i++){
	$line = $array[$i];
    $tmp = explode(' ', $line);
    $arr[$tmp[0]] = $tmp[1];
}

if (isset($arr[$email])){
	$_SESSION['msgg'] = 'sorry, but this address is already registered :( check your data and try again';
    header('Location: sign_up.php');
	exit();
} else
if($pass != $cpass){
	$_SESSION['msgg'] = 'sorry, but your passwords do not match :( check your data and try again';
    header('Location: sign_up.php');
	exit();
}else{
	$fp = fopen('users.txt', 'a');
    fwrite($fp, $email);
    fwrite($fp, ' ');
    fwrite($fp, $pass);
    fwrite($fp, PHP_EOL);
    fclose($fp);
	
    header('Location: index.php');	
	exit();
}
}else{
	$_SESSION['msgg'] = 'please fill in all fields';
    header('Location: sign_up.php');
	exit();
}
?>


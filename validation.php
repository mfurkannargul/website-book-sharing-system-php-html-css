<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'users');

$email = $_POST['user'];
$password = md5($_POST['password']);
 
$s = " select * from users where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['email'] = $email;
	header('location:index_logged_in.php');
} else {
	header('location:login_error.php');
}

?>
<?php
	session_start();
	require_once 'connect.php';


	$email_confirmed = $_POST['em_conf'];
	$rand_number_origin = $_SESSION['rand_number'];
	$user = $_SESSION['active_user']['id'];


	if($email_confirmed == $rand_number_origin){
		mysqli_query($connect, "UPDATE `users` SET `email_confirmed`='1' WHERE `id`='$user'");
		header('Location: ../user_profile.php');
	}else{
		header('Location: em_conf.php');
		$_SESSION["ermessage"] = "Вы ввели неверный код, попробуйте снова";
	}
?>
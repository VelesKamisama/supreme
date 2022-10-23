<?php
	session_start();
	require_once 'connect.php';

	$new_log = $_POST['log_change'];
	$user = $_SESSION['active_user']['id'];

	mysqli_query($connect, "UPDATE `users` SET `login`='$new_log' WHERE `id`='$user'");

	$_SESSION['active_user']['name'] = $new_log;
	$_SESSION["suc_message_pas"] = "again";
	
	header('Location: ../user_profile.php');	
?>
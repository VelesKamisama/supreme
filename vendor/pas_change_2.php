<?php
	session_start();
	require_once 'connect.php';

	$new_pas = md5($_POST['pas_change']);
	$user = $_SESSION['active_user']['id'];

	mysqli_query($connect, "UPDATE `users` SET `password`='$new_pas' WHERE `id`='$user'");

	header('Location: ../user_profile.php');
	$_SESSION["suc_message_pas"] = "again";
?>
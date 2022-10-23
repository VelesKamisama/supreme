<?php
require_once 'connect.php';
session_start();

$new_email = $_POST['new_mail'];
$user = $_SESSION['active_user']['id'];
mysqli_query($connect, "UPDATE `users` SET `email`='$new_email' WHERE `id`='$user'");
mysqli_query($connect, "UPDATE `users` SET `email_confirmed`='0' WHERE `id`='$user'");

header('Location: ../user_profile.php');
?>
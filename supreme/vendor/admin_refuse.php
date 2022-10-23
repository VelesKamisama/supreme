<?php 
	session_start(); 
	require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>
<?php
	$unit_id=$_GET['unit_id'];

	if(!is_numeric($unit_id)){
		exit();
	}
	mysqli_query($connect, "DELETE FROM unites_req WHERE id='$unit_id'");
	mysqli_close($connect);
	header('Location: ../admin_profile.php');
?>

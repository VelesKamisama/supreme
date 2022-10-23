<?php
	
	$connect = mysqli_connect('localhost', 'root', '', 'supreme');

	if($connect->connect_error)
	{
		die("Ошибка: " . $db->connect_error);
	}
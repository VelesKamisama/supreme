<?php 
	session_start(); 
//	Проверка на активного пользователя
	if(!array_key_exists('active_user', $_SESSION))
	{
		header('Location: ../main_page.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>
		Registration
	</title>
<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
<div class="un_prof_miniforms">
	<form action="pas_change_2.php" method="post" class="prof_miniforms">
		<label>Введите новый пароль</label>
		<input type="Password" name="pas_change" placeholder="укажите пароль" maxlength="32" minlength="6" required>
		<button type="submit">Отправить</button>
	</form>
</div>
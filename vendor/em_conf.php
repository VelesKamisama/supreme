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
	<form action="em_conf_2.php" method="post" class="prof_miniforms">
		<label>Письмо отправляется при каждом обновлении страницы</label>
		<label>Введите код, отправленный на почту</label>
		<input type="number" name="em_conf">
		<button type="submit">Отправить</button>
		<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////Отправка письма//////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		if(array_key_exists('ermessage', $_SESSION)){
			echo '<p class="msg"> ' . $_SESSION['ermessage'] . "</p>";
			unset($_SESSION['ermessage']);
		}else{
			if(array_key_exists('active_user', $_SESSION)){
				$email_data = $_SESSION['active_user']['email'];
			}

			$to = $email_data; // обратите внимание на запятую
			// тема письма
			$subject = 'Подтверждение регистрации на сайте';
			// текст письма
			$rand_number = mt_rand(1000, 9999);
			$message = $rand_number;
			$headers = 'From: webmaster@example.com' . "\r\n" .
			    'Reply-To: webmaster@example.com' . "\r\n" . 
			    phpversion();
			// Отправляем
			mail($to, $subject, $message, $headers);
			$_SESSION["rand_number"] = $rand_number;
		}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		?>	
	</form>
</div>
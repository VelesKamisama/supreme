<?php 
	session_start(); 
//	Проверка на активного пользователя
	if(array_key_exists('active_user', $_SESSION))
	{
		header('Location: main_page.php');
	}
	require_once "vendor/connect.php";
	

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
<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<!--Форма регистрации -->
		<div class="ra_table">
			<form method="post" class="regauth" action="vendor/reg.php">
				<div class="home_btn">
					<label>
						<a href="main_page.php">Вернуться на главную</a>
					</label>
				</div>
				<div class="reg_auth_links">
					<label> 
						<label>Регистрация \</label>
						<label><a href="auth.php">Авторизация</a></label>
					</label>
				</div>
				<label>
					E-mail
				</label>
				<input type="email" name="email" placeholder="укажите адрес электронной почты" maxlength="32" required>
				<label>
					Логин
				</label>
				<input type="text" name="login" placeholder="укажите логин" maxlength="32" minlength="3" required>				
				<label>
					Пароль
				</label>
				<input type="Password" name="password" placeholder="укажите пароль" maxlength="32" minlength="6" required>				
				<label>
					Подтверждение пароля
				</label>
				<input type="Password" name="password_confirm" placeholder="укажите пароль" maxlength="32" minlength="6" required>
				
				<button type="submit">
					Зарегистрироваться
				</button>

					
				<?php
				//	Вывод ссобщении о возможных ошибках
					if(array_key_exists('message', $_SESSION))
						{
							echo '<p class="msg"> ' . $_SESSION['message'] . "</p>";							
						}
						unset($_SESSION['message']);
				?>	
			</form>
		</div>
</body>
</html>


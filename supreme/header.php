
<!DOCTYPE html>
<html lang="en">
<html>
<header class="header">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>supcom</title>
	
	<div class="site_name">
		<a class="site_name_main" href="main_page.php">Supreme Commander</a>
		<a class="all_the_units" href="main_page_2.php">все юниты</a>
	</div>
	<div class="header_links">
		<?php
			if(array_key_exists('active_user', $_SESSION))
			{
				if($_SESSION['active_user']['name'] == 'localGod'){
					echo '<p> Администратор </p><br><br>';						
					echo '<p> <a href="admin_profile.php">Админка</a> </p>';
					echo '<p> <a href="add_unit.php">Добавить юниты</a> </p>';
					echo '<p> <a href="vendor/logout.php">Выход</a> </p>';
				}
				else if($_SESSION['active_user']['name'] == 'concernedPerson'){
					echo '<p> Заинтереснованный посетитель </p>';						
					echo '<p> <a href="site_doc.php">Документация к сайту</a> </p>';
					echo '<p> <a href="vendor/logout.php">Выход</a> </p>';
				}else{
					echo '<p><h3> Привет '. $_SESSION['active_user']['name'] . '</h3></p>';
					echo '<p> <a href="user_profile.php">Профиль</a> </p>';
					echo '<p> <a href="add_unit.php">Добавить запись</a> </p>';
					echo '<p> <a href="vendor/logout.php">Выход</a> </p>';											
				}
			}
			else{
				echo '<p> <a href="reg.php">Зарегистрироваться</a> </p>';
				echo '<p> <a href="auth.php">Войти</a> </p> <br>';
			}
		?>
	</div>	
</header>
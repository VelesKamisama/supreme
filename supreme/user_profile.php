<?php
	session_start();
	require_once 'vendor/connect.php';
	require_once 'header.php';
//	Проверка на активного пользователя
	if(!array_key_exists('active_user', $_SESSION))
	{
		header('Location: main_page.php');
	}
?>
<div class="up_cont">
<!------------------------------------------------------------>
<!------------------------------------------------------------>
	<div class="field_zero">
		<p>
			<?php

				$login_data = $_SESSION['active_user']['name'];
				$user_check = mysqli_query($connect, "SELECT * FROM users WHERE login='$login_data'");
				
					//	закинул в переменную массив из БД, теперь с ним лучше работать
					//	пример того, как выглядит массив сразу из БД и в переменной внизу
					$user = mysqli_fetch_assoc($user_check);
					//	закидываем в массив сессий активных пользователей данные из массива $user
					$_SESSION["active_user"] = 
					[
						"id" => $user['id'],
						"name" => $user['login'],
						"email" => $user['email']
					];
				$id = $_SESSION['active_user']['id'];

				$email = mysqli_query($connect, "SELECT email FROM users WHERE id='$id'");
				if (mysqli_num_rows($email) > 0) : 
					$row = mysqli_fetch_assoc($email) ?>        
					<p>Адрес электронной почты</p>
					<p style="padding: 5px;"><?=$row['email']?></p>
				<?php 
				endif;
			?>
		</p>
		<p>
			<?php
				$status = mysqli_query($connect, "SELECT email_confirmed FROM users WHERE id='$id'");
				if (mysqli_num_rows($email) > 0) : 
					$row = mysqli_fetch_assoc($status) ?>        
					<p>
						<?php
							if($row['email_confirmed']==0){
								echo '<p style="color: red;">Адрес эл.почты не подтвержден</p>';
							}else{
								echo '<p style="color: green;">Адрес эл.почты подтвержден</p>';
							}
						?>
					</p>
				<?php 
				endif;
			?>
		</p>
	</div>
<!------------------------------------------------------------>
<!------------------------------------------------------------>

	<?php
		$em_conf_mes = mysqli_query($connect, "SELECT email_confirmed FROM users WHERE email='$id'");
		if (mysqli_num_rows($email) > 0) :
			if($row['email_confirmed']==0) : ?>
				<div class="field_one">
					<p>
						<a href="vendor/em_conf.php">Подтвердить адрес эл. почты</a>
					</p>
				</div>
		<?php
			endif;
		endif;
	?>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
	<div class="field_one">
		<p>
			<a href="vendor/changemail.php">Изменить адрес эл.почты</a>
		</p>
	</div>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
	<div class="field_one">
		<p>
			<a href="vendor/pas_change.php">Изменить пароль</a>
		</p>
		<?php
			if(array_key_exists('suc_message_pas', $_SESSION)){
				echo '<p style="color: green;">Пароль успешно сменен</p>';
				unset($_SESSION['suc_message_pas']);
			}
		?>
	</div>
<!------------------------------------------------------------>
<!------------------------------------------------------------>	
	<div class="field_one">
		<p>
			<a href="vendor/login_change.php">Сменить логин</a>
		</p>
		<?php
			if(array_key_exists('suc_message_log', $_SESSION)){
				echo '<p style="color: green;">Пароль успешно сменен</p>';
				unset($_SESSION['suc_message_log']);
			}
		?>
	</div>
</div>

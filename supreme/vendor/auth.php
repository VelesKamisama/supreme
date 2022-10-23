<!-- Обработка формы -->
<?php
	session_start();
	require_once "connect.php";

	$login_data = input_val($_POST['login']);
	$password = md5(input_val($_POST['password']));

	$user_check = mysqli_query($connect, "SELECT * FROM users WHERE (login='$login_data' OR email='$login_data') AND password='$password'");
	if(mysqli_num_rows($user_check)){
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
		
		mysqli_close($connect);
		header('Location: ../main_page.php');

	}else{
		$_SESSION["message"] = "Неправильный логин/e-mail или пароль";
		header('Location: ../auth.php');
	}
	
		

	function input_val($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>
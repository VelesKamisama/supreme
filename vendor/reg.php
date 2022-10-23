<?php
	session_start();
	require_once 'connect.php';

// Обработка пользовательских данных

	$email_data = $_POST['email'];
	$login_data = input_val($_POST['login']);
	$password = input_val($_POST['password']);
	$password_confirm = input_val($_POST['password_confirm']);		
	$email_check = mysqli_query($connect, "SELECT email FROM users WHERE email='$email_data'");
	$login_check = mysqli_query($connect, "SELECT login FROM users WHERE login='$login_data'");

//Проверка на пустое значение
	if(empty($login_data)){
		$login_data = "none";
	}
	
	if($login_data == 'none'){
		$_SESSION["message"] = "Логин не может состоять только из пробелов";
		mysqli_close($connect);
		header('Location: ../reg.php');
	}
//Проверка пользователей
	if(mysqli_num_rows($email_check)){
		$_SESSION["message"] = "Пользователь с такой почтой существует";
		mysqli_close($connect);
		header('Location: ../reg.php');
	}else if(mysqli_num_rows($login_check)){
		$_SESSION["message"] = "Пользователь с таким логином существует";
		mysqli_close($connect);
		header('Location: ../reg.php');
	}else if($password !== $password_confirm){
		$_SESSION["message"] = "Пароли не совпадают";
		mysqli_close($connect);
		header('Location: ../reg.php');
	}else if($password === $password_confirm){
		$password = md5($_POST['password']);

		mysqli_query($connect, "INSERT INTO `users`(`email`, `login`, `password`) VALUES ('$email_data','$login_data','$password')");
		$_SESSION["active_user"] = 
		[
			"name" => $login_data,
			"email" => $email_data
		];
		mysqli_close($connect);
		header('Location: ../main_page.php');
	}
		
//спасение от иньекции
	function input_val($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////Отправка письма//////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
/*		
	$to = '$email_data'; // обратите внимание на запятую
	// тема письма
	$subject = 'Подтверждение регистрации на сайте';
	// текст письма
	$rand_number = mt_rand(1000, 9999);
	$message = '$rand_number = mt_rand(1000, 9999);';
	$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" . 
	    phpversion();
	// Отправляем
	mail($to, $subject, $message, $headers); 
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
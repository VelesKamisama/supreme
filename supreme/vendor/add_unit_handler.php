<?php
	session_start();
	require_once 'connect.php';
	

	$unit_type = $_POST["un_type"];
	$fract = $_POST["fract"];
	$name = input_val($_POST["name"]);
	$tech_lvl = $_POST["tech_lvl"];
	$hp = $_POST["hp"];
	$hp_reg = $_POST["hp_reg"];
	$en_cost = $_POST["en_cost"];
	$mass_cost = $_POST["mass_cost"];
	$time_cost = $_POST["time_cost"];
	$move_speed = $_POST["move_speed"];
	$rotate_speed = $_POST["rotate_speed"];
	$direct_vision = $_POST["direct_vision"];
	$radar = $_POST["radar"];
	$sonar = $_POST["sonar"];

	$exp_1 = $_POST["exp_1"];
	$exp_2 = $_POST["exp_2"];
	$exp_3 = $_POST["exp_3"];
	$exp_4 = $_POST["exp_4"];
	$exp_5 = $_POST["exp_5"];

	$hp_1 = $_POST["hp_1"];
	$hp_2 = $_POST["hp_2"];
	$hp_3 = $_POST["hp_3"];
	$hp_4 = $_POST["hp_4"];
	$hp_5 = $_POST["hp_5"];

	$reg_1 = $_POST["reg_1"];
	$reg_2 = $_POST["reg_2"];
	$reg_3 = $_POST["reg_3"];
	$reg_4 = $_POST["reg_4"];
	$reg_5 = $_POST["reg_5"];

	$en_speed = $_POST["en_speed"];
	$mass_speed = $_POST["mass_speed"];
	$en_storage = $_POST["en_storage"];
	$mass_storage = $_POST["mass_storage"];

	$reclaim_hp = $_POST["reclaim_hp"];
	$reclaim_amount = $_POST["reclaim_amount"];

	function input_val($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

//------------------------------------------------------------------------------------------
//-------------------------------- Is it Admin's acc? --------------------------------------
//------------------------------------------------------------------------------------------
if(array_key_exists('active_user', $_SESSION)){
	if($_SESSION['active_user']['name'] == 'localGod'){
		if($unit_type == 'none'){
			$_SESSION['message'] = "Необходимо выбрать тип юнита";
			header('Location: ../add_unit.php');
		}else if($fract == 'none'){
			$_SESSION['message'] = "Небходимо выбрать фракцию";
			header('Location: ../add_unit.php');
		}else if(empty($name)){
			$_SESSION['message'] = "Поле 'Название' не может состоять только из пробелов";
			header('Location: ../add_unit.php');
		}else if($tech_lvl == 'none'){
			$_SESSION['message'] = "Необходимо выбрать уровень технологии";
			header('Location: ../add_unit.php');
		}else{
			$path = 'uploads/' . time() . $_FILES['avatar']['name'];
	        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
	            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
	            header('Location: ../register.php');
	        }
			if($unit_type == "acu"){
				mysqli_query($connect,"
					INSERT INTO `unites`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `en_storage`, `mass_storage`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed','$en_storage','$mass_storage')");

				mysqli_close($connect);
				$_SESSION["message"] = "Операция выполнена успешно";
				header("Location: ../add_unit.php");
			}elseif ($unit_type == "sacu") {
				mysqli_query($connect,"
					INSERT INTO `unites`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`, `en_storage`, `mass_storage`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed', '$reclaim_amount', '$reclaim_hp','$en_storage','$mass_storage')");

				mysqli_close($connect);
				$_SESSION["message"] = "Операция выполнена успешно";
				header("Location: ../add_unit.php");
			}elseif ($unit_type == "engineer" || $unit_type=="naval" || $unit_type=="ground" || $unit_type=="air") {
				mysqli_query($connect,"
					INSERT INTO `unites`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed', '$reclaim_amount', '$reclaim_hp')");

				mysqli_close($connect);
				$_SESSION["message"] = "Операция выполнена успешно";
				header("Location: ../add_unit.php");
			}
		}	
	//is it admins acc?													
	}
//------------------------------------------------------------------------------------------
//-------------------------------- else not admin ------------------------------------------
//------------------------------------------------------------------------------------------
	else{

		if($unit_type == 'none'){
			$_SESSION['message'] = "Необходимо выбрать тип юнита";
			header('Location: ../add_unit.php');
		}else if($fract == 'none'){
			$_SESSION['message'] = "Небходимо выбрать фракцию";
			header('Location: ../add_unit.php');
		}else if(empty($name)){
			$_SESSION['message'] = "Поле 'Название' не может состоять только из пробелов";
			header('Location: ../add_unit.php');
		}else if($tech_lvl == 'none'){
			$_SESSION['message'] = "Необходимо выбрать уровень технологии";
			header('Location: ../add_unit.php');
		}else{
			$path = 'uploads/' . time() . $_FILES['avatar']['name'];
	        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
	            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
	            header('Location: ../register.php');
	        }
			if($unit_type == "acu"){
				mysqli_query($connect,"
					INSERT INTO `unites_req`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `en_storage`, `mass_storage`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed','$en_storage','$mass_storage')");

				mysqli_close($connect);
				$_SESSION["message"] = "Данные отправлены на модерацию";
				header("Location: ../add_unit.php");
			}elseif ($unit_type == "sacu") {
				mysqli_query($connect,"
					INSERT INTO `unites_req`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`, `en_storage`, `mass_storage`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed', '$reclaim_amount', '$reclaim_hp','$en_storage','$mass_storage')");

				mysqli_close($connect);
				$_SESSION["message"] = "Данные отправлены на модерацию";
				header("Location: ../add_unit.php");
			}elseif ($unit_type == "engineer" || $unit_type=="naval" || $unit_type=="ground" || $unit_type=="air") {
				mysqli_query($connect,"
					INSERT INTO `unites_req`(`unit_type`, `fraction`, `name`, `avatar`, `tech_lvl`, `hp`, `hp_reg`, `mass_cost`, `en_cost`, `time_cost`, `move_speed`, `rotate_speed`, `direct_vision`, `radar`, `sonar`, `exp_1`, `exp_2`, `exp_3`, `exp_4`, `exp_5`, `hp_1`, `hp_2`, `hp_3`, `hp_4`, `hp_5`, `reg_1`, `reg_2`, `reg_3`, `reg_4`, `reg_5`, `en_speed`, `mass_speed`, `reclaim_amount`, `reclaim_hp`) 
					VALUES ('$unit_type','$fract','$name','$path','$tech_lvl','$hp','$hp_reg','$mass_cost','$en_cost','$time_cost','$move_speed','$rotate_speed','$direct_vision','$radar','$sonar','$exp_1','$exp_2','$exp_3','$exp_4','$exp_5','$hp_1','$hp_2','$hp_3','$hp_4','$hp_5','$reg_1','$reg_2','$reg_3','$reg_4','$reg_5','$en_speed','$mass_speed', '$reclaim_amount', '$reclaim_hp')");

				mysqli_close($connect);
				$_SESSION["message"] = "Данные отправлены на модерацию";
				header("Location: ../add_unit.php");
			}

		}
	//else not Admin
	}
//if session exists
}
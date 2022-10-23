<?php
	session_start();
	require_once 'connect.php';

	$const_type = $_POST["const_type"];
	$fract = $_POST["fract"];
	$name = input_val($_POST["name"]);
	$tech_lvl = $_POST["tech_lvl"];
	$hp = $_POST["hp"];
	$hp_reg = $_POST["hp_reg"];
	$en_cost = $_POST["en_cost"];
	$mass_cost = $_POST["mass_cost"];
	$time_cost = $_POST["time_cost"];
	$reclaim_hp = $_POST["reclaim_hp"];
	$reclaim_amount = $_POST["reclaim_amount"];

//Инпуты, выпадающие при определенном выборе здания
	$en_storage = $_POST["en_storage"];
	$mass_storage = $_POST["mass_storage"];

	$explosion_damage = $_POST["explosion_damage"];
	$explosion_radius = $_POST["explosion_radius"];

	$build_ability = input_val($_POST["build_ability"]);

	$direct_vision = $_POST["direct_vision"];
	$radar = $_POST["radar"];
	$sonar = $_POST["sonar"];


//Закидываем данные в БД
	if($const_type == 'none'){
		$_SESSION['message'] = "Необходимо выбрать тип здания";
		header('Location: ../add_const.php');
	}else if($fract == 'none'){
		$_SESSION['message'] = "Небходимо выбрать фракцию";
		header('Location: ../add_const.php');
	}else if(empty($name)){
		$_SESSION['message'] = "Поле 'Название' не может состоять только из пробелов";
		header('Location: ../add_const.php');
	}else if($tech_lvl == 'none'){
		$_SESSION['message'] = "Необходимо выбрать уровень технологии";
		header('Location: ../add_const.php');
	}else{
		if($const_type == "fact"){
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`, `en_storage`, `mass_storage`, `direct_vision`, `radar`, `sonar`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$en_storage','$mass_storage','$direct_vision','$radar','$sonar')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}elseif ($const_type == "eco") {
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`, `explosion_damage`, `explosion_radius`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$explosion_damage','$explosion_radius')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}elseif ($const_type == "attack") {
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`,`direct_vision`, `radar`, `sonar`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$direct_vision','$radar','$sonar')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}elseif ($const_type == "def") {
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`,`direct_vision`, `radar`, `sonar`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$direct_vision','$radar','$sonar')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}elseif ($const_type == "scout") {
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`,`direct_vision`, `radar`, `sonar`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$direct_vision','$radar','$sonar')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}elseif ($const_type == "support") {
			mysqli_query($connect,"INSERT INTO `constructions`(`const_type`, `fract`, `name`, `tech_lvl`, `hp`, `hp_reg`, `en_cost`, `mass_cost`, `time_cost`, `reclaim_hp`, `reclaim_amount`,`build_ability`) 
				VALUES ('$const_type','$fract','$name','$tech_lvl','$hp','$hp_reg','$en_cost','$mass_cost','$time_cost','$reclaim_hp','$reclaim_amount','$build_ability')");
			mysqli_close($connect);

			$_SESSION["message"] = "Операция выполнена успешно";
			header("Location: ../add_const.php");
		}
	}
	
	function input_val($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
/*

*/
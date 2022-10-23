<?php
	session_start();
	require_once "header.php";
	//	Проверка на активного пользователя
	if(!array_key_exists('active_user', $_SESSION))
	{
		header('Location: main_page.php');
	}
?>
<body>
<div class="add_pages">
	<form action="vendor/add_unit_handler.php" method="post" class="some_pages" enctype="multipart/form-data">
<?php
//	Вывод ссобщении о возможных ошибках
		if(array_key_exists('message', $_SESSION))
			{
				echo '<p class="msg"> ' . $_SESSION['message'] . "</p>";							
			}
			unset($_SESSION['message']);
?>
		<div class="add_select">
			<label>Добавить юниты \</label>
			<label><a href="add_const.php">Добавить строения</a></label>
		</div>
<!-- Обработка выбора ---------------------------------------------------------------------------------->
		<label>Тип юнита</label>
		<select name="un_type" onchange="unit_type(this)">
			<option value="none" selected="selected">Селектор; обязателен к выбору</option>
			<option value="acu">ACU-armored command unit</option>
			<option value="sacu">SACU-support armored command unit</option>
			<option value="engineer">Инженерный дрон</option>
			<option value="naval">Водный</option>
			<option value="ground">Наземный</option>
			<option value="air">Воздушный</option>
		</select><br>

		<label>Фракция</label>
			<select name="fract">
				<option value="none" selected="selected">Селектор; обязателен к выбору</option>
				<option>AEON</option>
				<option>CYBRAN</option>
				<option>SERAPHIM</option>
				<option>UEF</option>
			</select><br>

		<label>Название</label>
			<input type="text" name="name" minlength="3" maxlength="32" placeholder="текстовое поле; обязателен к заполнению" required><br>
		<label>Изображение юнита</label>
        	<input type="file" name="avatar">

		<label>Уровень технологии</label>
			<select name="tech_lvl">
				<option value="none" selected="selected">Селектор; обязателен к выбору</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4 (экспериментальный юнит)</option>
			</select><br>

		<label>Количество ХП</label>
			<input type="number" name="hp" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Регенерация ХП</label>
			<input type="number" name="hp_reg" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Стоймость постройки в энергии</label>
			<input type="number" name="en_cost" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Стоймость постройки в массе</label>
			<input type="number" name="mass_cost" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Стоймость постройки по времени(сек)</label>
			<input type="number" name="time_cost" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>
		<label>Скорость перемещения</label>
			<input type="number" name="move_speed" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Скорость поворота</label>
			<input type="number" name="rotate_speed" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Обзор прямой</label>
			<input type="number" name="direct_vision" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>
		<label>Радар</label>
			<input type="number" name="radar" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>
		<label>Сонар (при наличии)</label>
			<input type="number" name="sonar" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Необходимое количество уничтоженной массы для перехода на следующий уровень</label><br>
			<input type="number" name="exp_1" min="1" max="1000000" placeholder="1-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="exp_2" min="1" max="1000000" placeholder="2-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="exp_3" min="1" max="1000000" placeholder="3-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="exp_4" min="1" max="1000000" placeholder="4-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="exp_5" min="1" max="1000000" placeholder="5-й уровень; числовое поле (<1 000 000)"><br>
		<label>Прибавка к ХП при получении уровня</label><br>
			<input type="number" name="hp_1" min="1" max="1000000" placeholder="1-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="hp_2" min="1" max="1000000" placeholder="2-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="hp_3" min="1" max="1000000" placeholder="3-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="hp_4" min="1" max="1000000" placeholder="4-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="hp_5" min="1" max="1000000" placeholder="5-й уровень; числовое поле (<1 000 000)"><br>
		<label>Прибавка к регенерации ХП при получении уровня</label><br>
			<input type="number" name="reg_1" min="1" max="1000000" placeholder="1-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="reg_2" min="1" max="1000000" placeholder="2-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="reg_3" min="1" max="1000000" placeholder="3-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="reg_4" min="1" max="1000000" placeholder="4-й уровень; числовое поле (<1 000 000)">
			<input type="number" name="reg_5" min="1" max="1000000" placeholder="5-й уровень; числовое поле (<1 000 000)"><br>

		<label>Использование энергии/сек</label>
				<input type="number" name="en_speed" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>
		<label>Использование массы/сек</label>
			<input type="number" name="mass_speed" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>



<!-- Выпадающие поля при выборе типа юнита -->
		<div id="acu_sacu" style="display: none;">
			<label>Вместимость хранилища энергии</label>
				<input type="number" name="en_storage" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Вместимость хранилища массы</label>
				<input type="number" name="mass_storage" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
		</div>

		<div id="sacu_engineer_naval_ground_air" style="display: none;">
			<label>ХП реклейма, оставщегося после уничтожения юнита</label>
				<input type="number" name="reclaim_hp" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Количество реклейма, оставщегося после уничтожения юнита</label>
				<input type="number" name="reclaim_amount" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
		</div>
		<?php 
			if(array_key_exists('active_user', $_SESSION)){
				if($_SESSION['active_user']['name'] == 'localGod'){
					echo '<br><button type="submit">Внести запись в БД</button><br>';
				}else{
					echo '<br><button type="submit">Отправить на модерацию</button><br>';
				}
			}
		?>

	</form>
	


	
</div>
</body>


<!-- Обработка селектора ---------------------------------------------------------------------------------->
<script type="text/javascript">
	function unit_type(a){
		var label = a.value;
		if (label == "acu") {
			document.getElementById("acu_sacu").style.display="block";
			document.getElementById("sacu_engineer_naval_ground_air").style.display="none";
		}else if(label == "sacu"){
			document.getElementById("acu_sacu").style.display="block";
			document.getElementById("sacu_engineer_naval_ground_air").style.display="block";			
		}else if(label == "engineer"){
			document.getElementById("acu_sacu").style.display="none";
			document.getElementById("sacu_engineer_naval_ground_air").style.display="block";
		}else if(label=="naval" || label=="ground" || label=="air"){
			document.getElementById("acu_sacu").style.display="none";
			document.getElementById("sacu_engineer_naval_ground_air").style.display="block";		
		}
		else{
			document.getElementById("acu_sacu").style.display="none";
			document.getElementById("sacu_engineer_naval_ground_air").style.display="none";
		}
	}
</script>
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
	<form action="vendor/add_const_handler.php" method="post" class="some_pages">
<?php
//	Вывод ссобщении о возможных ошибках
		if(array_key_exists('message', $_SESSION))
			{
				echo '<p class="msg"> ' . $_SESSION['message'] . "</p>";							
			}
			unset($_SESSION['message']);
?>
		<div class="add_select">
			<label><a href="add_unit.php">Добавить юниты \</a></label>
			<label>Добавить строения</label>
		</div>
<!-- Обработка выбора ---------------------------------------------------------------------------------->	
		<label>Тип строения</label>
		<select name="const_type" onchange="construction_type(this)">
			<option value="none" selected="selected">Селектор; обязателен к выбору</option>
			<option value="fact">Производственное</option>
			<option value="eco">Экономическое</option>
			<option value="attack">Атакующее</option>
			<option value="def">Защитное</option>
			<option value="scout">Разведки</option>
			<option value="support">Поддержки</option>
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

		<label>Хп реклейма, оставщегося после уничтожения юнита</label>
			<input type="number" name="reclaim_hp" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>

		<label>Количество реклейма, оставщегося после уничтожения юнита</label>
			<input type="number" name="reclaim_amount" min="1" max="1000000" placeholder="числовое поле (<1 000 000)"><br>


<!-- Выпадающие поля при выборе типа здания поля ввода -->
		<div id="fact" style="display: none;">
			<label>Вместимость хранилища энергии</label><br>
				<input type="number" name="en_storage" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Вместимость хранилища массы</label><br>
				<input type="number" name="mass_storage" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;">
		</div>
		<div id="eco" style="display: none;">
			<label>Наносимый урон от уничтожения здания</label><br>
				<input type="number" name="explosion_damage" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Радиус взрыва при уничтожении здания</label><br>
				<input type="number" name="explosion_radius" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;">
		</div>
		<div id="support" style="display: none;">
			<label>Способен построить (если возможно)</label><br>
				<input type="text" name="build_ability" placeholder="Укажите название юнита" style="width: 100%; padding: 3px;">			
		</div>
		<div id="vision" style="display: none;">
			<label>Обзор прямой</label><br>
				<input type="number" name="direct_vision" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Радар</label><br>
				<input type="number" name="radar" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>
			<label>Сонар (при наличии)</label><br>
				<input type="number" name="sonar" min="1" max="1000000" placeholder="числовое поле (<1 000 000)" style="width: 100%; padding: 3px;"><br>	
		</div>
		
		<br><button type="submit">Отправить на модерацию</button><br>
	</form>


</div>
</body>

<script type="text/javascript">
	function construction_type(a){
		var label = a.value;
		if (label == "fact") {
			document.getElementById("fact").style.display="block";
			document.getElementById("eco").style.display="none";
			document.getElementById("support").style.display="none";
			document.getElementById("vision").style.display="block";
		}else if(label == "eco"){
			document.getElementById("eco").style.display="block";
			document.getElementById("fact").style.display="none";
			document.getElementById("support").style.display="none";
			document.getElementById("vision").style.display="none";			
		}else if(label == "support"){
			document.getElementById("support").style.display="none";
			document.getElementById("fact").style.display="none";
			document.getElementById("eco").style.display="none";
			document.getElementById("vision").style.display="none";
		}else if(label=="fact" || label=="scout" || label=="attack" || label=="def"){
			document.getElementById("vision").style.display="block";
			document.getElementById("fact").style.display="none";
			document.getElementById("eco").style.display="none";
			document.getElementById("support").style.display="none";		
		}
		else{
			document.getElementById("fact").style.display="none";
			document.getElementById("eco").style.display="none";
			document.getElementById("support").style.display="none";
			document.getElementById("vision").style.display="none";
		}
	}
</script>

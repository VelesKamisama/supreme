<?php 
	session_start(); 
	require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>
<?php
	$unit_id=$_GET['unit_id'];

	if(!is_numeric($unit_id)){
		echo "ненужно пытаться что-то изменить в GET запросе";
		exit();
	}
	require_once 'header.php';
	

	$units = mysqli_query($connect, "SELECT * FROM unites WHERE id='$unit_id'");
	while($row=mysqli_fetch_assoc($units)) : ?>
		<div class="table_data_cont">
			<div class="unit_image">
				<img src="<?= $row['avatar']; ?>" alt="">
			</div>
			<div class="data_val_cont">
				<div class="data_name">
					Тип юнита:
				</div>
				<div class="data_val">
					<?php
						$unit_type;
						if($row['unit_type'] == 'acu'){
							$unit_type = "ACU - armorred command unite";
						}elseif ($row['unit_type'] == 'sacu') {
							$unit_type = "SACU - supprot armorred command unite";
						}elseif ($row['unit_type'] == 'engineer') {
							$unit_type = "Инженерный дрон";
						}elseif ($row['unit_type'] == 'naval') {
							$unit_type = "Водный юнит";
						}elseif ($row['unit_type'] == 'ground') {
							$unit_type = "Наземный юнит";
						}elseif ($row['unit_type'] == 'air') {
							$unit_type = "Воздушный юнит";
						}
						print_r($unit_type); 
					?>	
				</div>				
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Фракция:
				</div>
				<div class="data_val">
					<?php print_r($row['fraction']); ?>	
				</div>
			</div>
			<div class="data_val_cont">
				<div class="data_name">
					Название:
				</div>
				<div class="data_val">
					<?php print_r($row['name']); ?>	
				</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Уровень технологий:
				</div>
				<?php
					$lvl;
					if($row['tech_lvl']==4){
						$lvl = '4 (экспериментальный юнит)';
					}else{
						$lvl = $row['tech_lvl'];
					}
				?>
					<div class="data_val">
						<?php print_r($lvl); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Количество ХП:
				</div>
				<?php
					$val;
					if($row['hp'] == 0){
						$val = '-';
					}else{
						$val = $row['hp'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Регенерация ХП:
				</div>
				<?php
					$val;
					if($row['hp_reg'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_reg'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Стоймость постройки в энергии:
				</div>
				<?php
					$val;
					if($row['en_cost'] == 0){
						$val = '-';
					}else{
						$val = $row['en_cost'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Стоймость постройки в массе:
				</div>
				<?php
					$val;
					if($row['mass_cost'] == 0){
						$val = '-';
					}else{
						$val = $row['mass_cost'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Стоймость постройки по времени(сек):
				</div>
				<?php
					$val;
					if($row['time_cost'] == 0){
						$val = '-';
					}else{
						$val = $row['time_cost'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Скорость перемещения:
				</div>
				<?php
					$val;
					if($row['move_speed'] == 0){
						$val = '-';
					}else{
						$val = $row['move_speed'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Скорость поворота:
				</div>
				<?php
					$val;
					if($row['rotate_speed'] == 0){
						$val = '-';
					}else{
						$val = $row['rotate_speed'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Обзор прямой:
				</div>
				<?php
					$val;
					if($row['direct_vision'] == 0){
						$val = '-';
					}else{
						$val = $row['direct_vision'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Радар:
				</div>
				<?php
					$val;
					if($row['radar'] == 0){
						$val = '-';
					}else{
						$val = $row['radar'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Сонар (при наличии):
				</div>
				<?php
					$val;
					if($row['sonar'] == 0){
						$val = '-';
					}else{
						$val = $row['sonar'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Необходимое количество уничтоженной массы для перехода на 1 уровень:
				</div>
				<?php
					$val;
					if($row['exp_1'] == 0){
						$val = '-';
					}else{
						$val = $row['exp_1'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Необходимое количество уничтоженной массы для перехода на 2 уровень:
				</div>
				<?php
					$val;
					if($row['exp_2'] == 0){
						$val = '-';
					}else{
						$val = $row['exp_2'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Необходимое количество уничтоженной массы для перехода на 3 уровень:
				</div>
				<?php
					$val;
					if($row['exp_3'] == 0){
						$val = '-';
					}else{
						$val = $row['exp_3'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Необходимое количество уничтоженной массы для перехода на 4 уровень:
				</div>
				<?php
					$val;
					if($row['exp_4'] == 0){
						$val = '-';
					}else{
						$val = $row['exp_4'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Необходимое количество уничтоженной массы для перехода на 5 уровень:
				</div>
				<?php
					$val;
					if($row['exp_5'] == 0){
						$val = '-';
					}else{
						$val = $row['exp_5'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к ХП при получении 1 уровня:
				</div>
				<?php
					$val;
					if($row['hp_1'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_1'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к ХП при получении 2 уровня:
				</div>
				<?php
					$val;
					if($row['hp_2'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_2'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к ХП при получении 3 уровня:
				</div>
				<?php
					$val;
					if($row['hp_3'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_3'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к ХП при получении 4 уровня:
				</div>
				<?php
					$val;
					if($row['hp_4'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_4'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к ХП при получении 5 уровня:
				</div>
				<?php
					$val;
					if($row['hp_5'] == 0){
						$val = '-';
					}else{
						$val = $row['hp_5'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к регенерации ХП при получении 1 уровня:
				</div>
				<?php
					$val;
					if($row['reg_1'] == 0){
						$val = '-';
					}else{
						$val = $row['reg_1'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к регенерации ХП при получении 2 уровня:
				</div>
				<?php
					$val;
					if($row['reg_2'] == 0){
						$val = '-';
					}else{
						$val = $row['reg_2'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к регенерации ХП при получении 3 уровня:
				</div>
				<?php
					$val;
					if($row['reg_3'] == 0){
						$val = '-';
					}else{
						$val = $row['reg_3'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к регенерации ХП при получении 4 уровня:
				</div>
				<?php
					$val;
					if($row['reg_4'] == 0){
						$val = '-';
					}else{
						$val = $row['reg_4'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Прибавка к регенерации ХП при получении 5 уровня:
				</div>
				<?php
					$val;
					if($row['reg_5'] == 0){
						$val = '-';
					}else{
						$val = $row['reg_5'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Использование энергии/сек:
				</div>
				<?php
					$val;
					if($row['en_speed'] == 0){
						$val = '-';
					}else{
						$val = $row['en_speed'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
			<div class="data_val_cont">
				<div class="data_name">
					Использование массы/сек:
				</div>
				<?php
					$val;
					if($row['mass_speed'] == 0){
						$val = '-';
					}else{
						$val = $row['mass_speed'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
			</div>
<!------------------------------------------------------------>
<!-- Вывод дополнительных полей в зависимости от типа юнита -->
<!------------------------------------------------------------>
			<?php
				if($row['unit_type']=='acu' || $row['unit_type']=='sacu') : 
			?>
				<div class="data_val_cont">
					<div class="data_name">
						Вместимость хранилища энергии:
					</div>
				<?php
					$val;
					if($row['en_storage'] == 0){
						$val = '-';
					}else{
						$val = $row['en_storage'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
				</div>
<!------------------------------------------------------------>
				<div class="data_val_cont">
					<div class="data_name">
						Вместимость хранилища массы:
					</div>
				<?php
					$val;
					if($row['mass_storage'] == 0){
						$val = '-';
					}else{
						$val = $row['mass_storage'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
				</div>
			<?php
				endif;
			?>
<!------------------------------------------------------------>
<!------------------------------------------------------------>
			<?php
				if($row['unit_type']=='sacu' || $row['unit_type']=='engineer' || $row['unit_type']=='naval' || $row['unit_type']=='ground' || $row['unit_type']=='air') :
			?>
				<div class="data_val_cont">
					<div class="data_name">
						Хп реклейма, оставщегося после уничтожения юнита:
					</div>
				<?php
					$val;
					if($row['reclaim_hp'] == 0){
						$val = '-';
					}else{
						$val = $row['reclaim_hp'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
				</div>
<!------------------------------------------------------------>
				<div class="data_val_cont">
					<div class="data_name">
						Количество реклейма, оставщегося после уничтожения юнита:
					</div>
				<?php
					$val;
					if($row['reclaim_amount'] == 0){
						$val = '-';
					}else{
						$val = $row['reclaim_amount'];
					}
				?>
					<div class="data_val">
						<?php print_r($val); ?>	
					</div>
				</div>
			<?php
				endif;
			?>
		</div>
	<?php endwhile;

?>
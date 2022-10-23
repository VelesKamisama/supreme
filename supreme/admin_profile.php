<?php
	session_start();
	require_once 'vendor/connect.php';
	require_once 'header.php';
?>

<div class="admin_prof_cont">
<!-------------------------------------------------->
<!----------------- Первый столбец ----------------->
<!-------------------------------------------------->
	<div class="moder_data_req">
		<div style="margin-bottom: 10px; display: flex; justify-content: center; height: 60px;">
			<p style="font-size: 20px;">
				Данные ожидающие модерации:
			</p>
		</div>
		<div>
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites_req");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p class="p_one">
				      	Link: <a href="unit_req_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a>
				      </p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
<!-------------------------------------------------->
<!----------------- Второй столбец ----------------->
<!-------------------------------------------------->
	<div class="user_list">
		<div style="margin-bottom: 10px; display: flex; justify-content: center; height: 60px;">
			<p style="font-size: 20px;">
				Список зарегистрированных пользователей
			</p>
		</div>
		<div>
			<?php
				$user_get = mysqli_query($connect, "SELECT login, email FROM users");
				if (mysqli_num_rows($user_get) > 0) :
	    			while($row = mysqli_fetch_assoc($user_get)) : ?>
	    				<p class="p_one">
	    					Login: <?= $row["login"] ?>
	    				</p>
	    				<p class="p_two">
	    					Email: <?= $row["email"] ?>
	    				</p>
	    			<?php endwhile;
	   			endif;
			?>
		</div>
	</div>
<!-------------------------------------------------->
</div>



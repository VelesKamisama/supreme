<?php 
	session_start(); 
	require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>
<link rel="stylesheet" type="text/css" href="assets/style.css">

<body class="main_page_body_2">

<div class="cont">
	<a href="main_page.php" class="navigation_links"><img src="images/main_page/up_arrow.png" style="margin-top: 10px;"></a>
<!------------------------------------------------------------------------------------------->
<!-------------------------------COLUMN TITLE------------------------------------------------>

<div class="fraction_fields">
		<div class="column" style="background-color: white; text-align: center; font-size: 20px; font-weight: bold; color: #1F425C;">
			<p>AEON</p>				
		</div>
		<div class="column" style="background-color: white; text-align: center; font-size: 20px; font-weight: bold; color: #1F425C;">
			<p>CYBRAN</p>		
		</div>
		<div class="column" style="background-color: white; text-align: center; font-size: 20px; font-weight: bold; color: #1F425C;">
			<p>SERAPHIM</p>			
		</div>
		<div class="column" style="background-color: white; text-align: center; font-size: 20px; font-weight: bold; color: #1F425C;">
			<p>UEF</p>
		</div>				
	</div>
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<!---------------------------------------ACU------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='acu' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">ACU - armorred command unit</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='acu' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='acu' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='acu' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='acu' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>
<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	
<!--ОГЛАВЛЕНИЕ КОЛОНКИ----------------------------SACU----------------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='sacu' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">SACU - support armorred command unit</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='sacu' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='sacu' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='sacu' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='sacu' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>
<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	
<!--ОГЛАВЛЕНИЕ КОЛОНКИ----------------------------ENGINEER------------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='engineer' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">Инженерный дрон</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='engineer' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>

		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='engineer' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='engineer' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='engineer' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>
<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	
<!--ОГЛАВЛЕНИЕ КОЛОНКИ----------------------------NAVAL------------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='naval' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">Водные юниты</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='naval' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='naval' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='naval' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='naval' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>
<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	
<!--ОГЛАВЛЕНИЕ КОЛОНКИ----------------------------GROUND------------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='ground' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">Наземные юниты</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='ground' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='ground' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='ground' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='ground' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>
<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	
<!--ОГЛАВЛЕНИЕ КОЛОНКИ----------------------------AIR------------------------------------------------------->
	<?php
	$check = mysqli_query($connect, "SELECT * FROM unites WHERE unit_type='air' AND (fraction='AEON' OR fraction='CYBRAN' OR fraction='SERAPHIM' OR fraction='UEF')");
	if(mysqli_num_rows($check) > 0) :
	?>
	<div class="column_title">Воздушные юниты</div>
	<div class="fraction_fields">
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='air' AND fraction='AEON'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='air' AND fraction='CYBRAN'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='air' AND fraction='SERAPHIM'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
		<div class="column">
			<?php
				$units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='air' AND fraction='UEF'");
				if (mysqli_num_rows($units) > 0) :
				  while($row = mysqli_fetch_assoc($units)) : ?>        
				      <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
				  <?php endwhile; 
				endif;
			?>
		</div>
	</div>
	<?php
	endif;
	?>

<!-- Окончание div cont -->				
</div>
<?php 
	session_start(); 
	require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>
<?php
	require_once 'header.php';
?>
<body class="main_page_body">	
<div class="main_page_text">
	<p>
	Амбициозная RTS от создателей Total Annihilation. Ядро концепции Supreme Commander - меньше сражений за ресурсы, больше баталий.
	</p>
	<p>
	В оригинальной игре от 2007 года доступно 3 играбельные расы: Aeon, Cybran и UEF. С дополнением Forgot Alliance становится доступна раса инопланетян Seraphim
	</p>

</div>
<div class="cont">
	<div class="fraction_fields">
		<div class="column" style="background-color: white;">
			<img class="aeon_img" src="images/main_page/aeon.jpg" alt="AEON">
			<div class="img_text_aeon">
				<p>
					Aeon Illuminate — фракция, состоящяя из людей, которые следуют Пути философии пришельцев-Серафимов, найденной много лет назад на Серафиме II, прежде чем они были уничтожены ксенофобными людьми во главе с командиром Смитом.
				</p>
			</div>				
		</div>
		<div class="column" style="background-color: white;">
			<img class="cybran_img" src="images/main_page/cybran.jpg" alt="CYBRAN">
			<div class="img_text_cybran">
				<p>
					Cybran Nation — фракция которая борется за свою независимость после многих лет порабощения Силами Земли. Юниты-кибраны часто напоминают насекомых по внешнему виду и известны своей чрезвычайной универсальностью: от штурмовых ботов, которые могут ремонтировать другие юниты, до ходячих морских эсминцев.
				</p>
			</div>			
		</div>
		<div class="column" style="background-color: white;">
			<img class="seraphim_img" src="images/main_page/seraphim.jpg" alt="SERAPHIM">
			<div class="img_text_seraphim">
				<p>
					Серафимы — инопланетная раса. Это вид, который Эон нашел на Серафиме II и научил их Пути. Человечество думало, что уничтожило расу, но на самом деле колония на Серафиме II состояла из изгнанников, которые верили, что могут следовать Пути, не жертвуя способностью сражаться.
				</p>
			</div>						
		</div>
		<div class="column" style="background-color: white;">
			<img class="uef_img" src="images/main_page/uef.jpg" alt="UEF">
			<div class="img_text_uef">
				<p>
					United Earth Federation - это «основная человеческая» фракция, представляющая естественную технологическую эволюцию современных человеческих технологий. UEF стремится объединить некогда великую Империю, которая теперь расколота. Они сражаются с Нацией кибранов и Эон Иллюминат.
				</p>
			</div>			
		</div>				
	</div>
<a href="main_page_2.php" class="navigation_links"><img src="images/main_page/bottom_arrow.png"></a>

<!--КОНЕЦ ОГЛАВЛЕНИЯ КОЛОНКИ------------------------------------------------------------------------------------->
	

<!--конец div cont--------------------------------------------------------------------------------------------->
</div>


</body>
</html>
<?php
require_once "vendor/connect.php";
session_start();
  
  $units = mysqli_query($connect, "SELECT name,id FROM unites WHERE unit_type='acu' AND fraction='AEON'");
  if (mysqli_num_rows($units) > 0) :
    while($row = mysqli_fetch_assoc($units)) : ?>        
        <p><a href="unit_page.php?unit_id=<?=$row['id']?>"><?= $row["name"]?></a></p>
    <?php endwhile; 
  endif?>
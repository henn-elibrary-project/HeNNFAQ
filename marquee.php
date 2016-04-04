<?php
	include 'connect.php';
 	$result=mysql_query("SELECT * FROM marquee");
 	
 	while($row=mysql_fetch_array($result)){
 		echo $row['Marquee_Text'];
 	}
 ?>

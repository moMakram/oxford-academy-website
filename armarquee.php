<?php


 
	  $sel = mysql_query("select * from marque order by id2");
			  
			while($row = mysql_fetch_array($sel)){
			
			echo('
     <img src="Images/marquee.png" width="15" height="15" />'); echo $row['descr']; echo('
	
      ');
	 }
	 
	 ?>
<?php

$link = mysql_connect("localhost","root","")
	or die ("no connection");

mysql_select_db("oxford",$link);
$query = mysql_query("SET NAMES 'utf8'");


?>
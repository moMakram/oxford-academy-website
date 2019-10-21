<?php

include("connec.php");

session_start();
session_destroy();

echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

<br/><br/><br/>
<center>
<font size="14px" color="#000000" >

</font> 


<br/><br/>');


echo " <font size='9px' > </font> <a href='index.php'><font size='5px'>  </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
///header("location:index.php");


echo('
</center>

</body>
</html> ');
?>
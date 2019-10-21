<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه محاضر</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session3']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" >

<font size="7px"><center>  اضافه محاضر </center> </font>
<br><br>

<center>
<font size="5px">  اسم المحاضر  </font>

<input type="text" name="name" size="50" />

</center>

<br><br>


<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> كلمه المرور </font>


<input type="text" name="user" size="50" />
</center>


<br><br>


<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> كلمه السر </font>


<input type="text" name="password" size="50" />
</center>

<br><br>












<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة " style=" width:85px; height:40px; font-family:'Comic Sans MS', cursive; color:#000000; " />


</center>

</form>


<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$username = $_POST['user'];
$password = $_POST['password'];





   






  $result = mysql_query("INSERT INTO teacher (name,username,password)
 values('$name','$username','$password' )");
 
  $result2 = mysql_query("INSERT INTO prev (username,password,type)
 values('$username','$password','teacher' )");
 
 
 echo "<br />";
if ($result && $result2){
echo('<center>');
echo ("inserted");
echo("<br>");
echo('</center>');

}
else
{
echo "error";
}
}




 
 







	

	
	
echo('
	
  </table>
</div>
<div id="fotter4"></div> ');

}else{

///header("location:admin.php");

echo " <font size='3px' ></font> <a href='admin.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin.php\">";

}
echo('
</body>
</html> 
');
?>

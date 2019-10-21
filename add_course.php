<?php

session_start();
include ("connec.php");



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه كورس</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');


if (isset($_SESSION['admin_session']) ) {
$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addcourse']=='1'){


echo('
<div id="add_pictures_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id='); echo $id; echo('"><div id="nav1"></div></a>
</div>
<div id="body2">
<center>
<font size="7" > اضافه كورس </font></center>
<center>
<br/><br/>
<form method="POST" >

<font size="5" > اسم الكورس </font>
<input type="text" name="course" id="descr" size="79" dir="rtl" />






<input name="submit" type="submit" value="اضافه"  style="width:100px; height:30px;  position:absolute; margin-left:-320px; margin-top:200px;" />
</form>
</center>
');

if(isset($_POST['submit'])){




$course = $_POST['course'];



      
	
$result=mysql_query("insert into courses (course) values ('$course')");
 echo "<br /><br /><br /><br /><br /><br /><br /><br />";
if ($result){
echo ("inserted");
echo("<br>");

}
else
{
echo "error";
}
}




echo('


</div>
<div id="fotter"></div> ');



}else{


echo " <font size='5px' color='red'><center> </center></font> <a href='control.php?id="; echo $id; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=control.php?id=";echo $id;  echo"\">";

}



}else{

///header("location:login.php");

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}

echo('
</body>
</html> ');

?>

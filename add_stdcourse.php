<?php

session_start();
include('connec.php');

$id3=$_GET['id3'];
$id=$_GET['id'];


echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه كورس لطالب</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addstucourse']=='1'){


?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" >

<font size="7px"><center>  اضافه كورس لطالب </center> </font>
<br><br>



<br><br>
<center>
<font size="5px">  اختر الكورس  </font>
<select name="course" style="width:200px; height:30px;">

<?php
$result = mysql_query("select * from courses order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['course']; echo(' </option>
');
}
?>


</select>

</center>
<br><br>







<br><br>
<center>
<font size="5px"> اختر المحاضر  </font>
<select name="teacher" style="width:200px; height:30px;">

<?php
$result = mysql_query("select * from teacher  order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['name']; echo(' </option>
');
}
?>


</select>

</center>
<br><br>



<br><br>
<center>
<font size="5px"> اختر الميعاد  </font>
<select name="section" style="width:200px; height:30px;">

<?php
$result = mysql_query("select * from type order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['typee']; echo(' </option>
');
}
?>


</select>

</center>
<br><br>

<center>
<font size="5px"> ادخل الايام  </font>

<input type="text" name="days" size="42" />

</center>

<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة " style=" width:85px; height:40px; font-family:'Comic Sans MS', cursive; color:#000000; " />


</center>

</form>


<?php

if(isset($_POST['submit'])){

$course = $_POST['course'];
$section = $_POST['section'];
$teacher = $_POST['teacher'];
$day = $_POST['days'];





   






  $result = mysql_query("INSERT INTO stucourse (course,section,day,teacher,id2)
 values('$course','$section','$day','$teacher','$id3' )");
 echo "<br />";
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
	
  </table>
</div>
<div id="fotter4"></div> ');


}else{

///header("location:control.php?id=$id ");

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
</html> 
');
?>

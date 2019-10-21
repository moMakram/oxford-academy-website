<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه طالب</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addstudent']=='1'){


?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" >

<font size="7px"><center>  اضافه الطلاب </center> </font>
<br><br>

<center>
<font size="5px">  اسم الطالب  </font>

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





   






  $result = mysql_query("INSERT INTO student (name,username,password)
 values('$name','$username','$password' )");
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

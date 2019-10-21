<?php

session_start();

include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];


echo(' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>
updating with makram
</title>

<link href="css/style3.css" rel="stylesheet" type="text/css" />
</head>

<body> ');
if (isset($_SESSION['admin_session']) ) {

echo('






<div id="container">

<br/><br/><br/><br/><br/>');

$result1 = mysql_query(" select * from courses   where id ='$id3' " );
	$row= mysql_fetch_array($result1);

	$course=$row['course'];




$result2 = mysql_query(" delete from answers   where course='$course' " );
$result3 = mysql_query(" delete from stucourse   where course ='$course' " );
$result4 = mysql_query(" delete from question   where course ='$course' " );
$result5 = mysql_query(" delete from tasks   where course ='$course' " );

$result6 = mysql_query(" delete from courses   where id ='$id' " );

if($result2&&$result3&&$result4&&$result5&&$result6)
{

echo('
<center> ');


echo("<font size='6px'> تمت العملية بنجاح </font>");

echo('
<br/><br/>
');

///header("location:updatecour_form.php");

echo " <font size='3px' ></font> <a href='updatecour_form.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=updatecour_form.php\">";




  echo('</center> ');
}

else
{

echo("error");
} 


echo('

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
</div>'); 


}else{

///header("location:login.php");

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}

echo('

</body>
</html> ');

?>





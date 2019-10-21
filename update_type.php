<?php

session_start();
include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];

$result = mysql_query("select * from type where id ='$id3'");

$rows=mysql_fetch_array($result);
$sec=$rows['typee'];
echo $sec;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على المواعيد</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['updatetype']=='1'){


?>


<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>

	
<form name="form1"  method="POST" >

<font size="8" > التعديل على المواعيد </font>
   <br/><br/><br/><br/>
	<font size="5" > الرمز </font> <input type="text" name="typee" value="<?php echo $rows['typee']; ?>" /><br/><br/>
	<font size="5" > من  </font> <input type="descr" size="120" name="frome" value="<?php echo $rows['frome']; ?>" /><br/><br/>
    <font size="5" > الى </font><input type="descr2" size="120" name="too" value="<?php echo $rows['too']; ?>" /><br/><br/>
  

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br>

<input name="submit" id="submit4" type="submit" value="حفظ التعديلات" />


</form>
	
	


  
  
  <?php

    if(isset($_POST['submit'])){
	
	
	
	$result3 = mysql_query(" update tasks set  section='$_POST[typee]' where section='$sec' " );
	$result4 = mysql_query(" update question set  section='$_POST[typee]' where section='$sec' " );
	$result5 = mysql_query(" update stucourse set  section='$_POST[typee]' where section='$sec' " );
	$result6 = mysql_query(" update answers set  section='$_POST[typee]' where section='$sec' " );
	$result2 = mysql_query(" update type set  typee='$_POST[typee]',frome='$_POST[frome]',too='$_POST[too]' where id='$_POST[id]' " );
	
	///$result4 = mysql_query(" update type set  typee='$_POST[typee]',frome='$_POST[frome]',too='$_POST[too]' where id='$_POST[id]' " );
	///$result5 = mysql_query(" update type set  typee='$_POST[typee]',frome='$_POST[frome]',too='$_POST[too]' where id='$_POST[id]' " );

echo (' ');
if($result3&&$result2&&$result4&&$result5&&$result6)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");




echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatetype_form.php?id="; echo $id; echo"'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"100;URL=updatetype_form.php?id="; echo $id; echo"\">";

echo('</center>');
}

else
{

echo("error");
}
}

echo('

  </center>
  </div>
<div id="fotter4"></div>

');

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
</html> ');
?>
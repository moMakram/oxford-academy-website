<?php
session_start();
include('connec.php');


$id=$_GET['id'];

$result = mysql_query("select * from prev where id ='$id'");

$rows=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على المستخدم</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session3']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>

	
<form name="form1"  method="POST" >

<font size="8" > التعديل على المستخدم </font>
   <br/><br/><br/><br/>
	
	<font size="5" > كلمه المرور </font> <input type="descr" size="20" name="username" value="<?php echo $rows['username']; ?>" /><br/><br/>
    <font size="5" > كلمه السر </font><input type="descr2" size="20" name="password" value="<?php echo $rows['password']; ?>" /><br/><br/>
  

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br>

<input name="submit" id="submit4" type="submit" value="حفظ التعديلات" />


</form>
	
	


  
  
  <?php

    if(isset($_POST['submit'])){
	
	$result2 = mysql_query(" update prev set  username='$_POST[username]',password='$_POST[password]' where id='$_POST[id]' and type='teacher' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");




echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateusers2_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateusers2_form.php\">";

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

///header("location:admin.php");

echo " <font size='3px' ></font> <a href='admin.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin.php\">";

}
echo('
</body>
</html> ');
?>
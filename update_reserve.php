<?php
session_start();
include('connec.php');

$id3=$_GET['id3'];
$id=$_GET['id'];

$result = mysql_query("select * from reserve where id ='$id3'");

$rows=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التحكم فى التسجيل</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['updatecontrol']=='1'){


?>


<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>

	
<form name="form1" action="reserve_control.php?id=<?php echo $id; ?>"  method="POST" >

<font size="8" > التحكم فى التسجيل </font>
   <br/><br/><br/><br/>
	<font size="5" > first name </font> <input type="text" name="id2" value="<?php echo $rows['fullname']; ?>" /><br/><br/>
	<font size="5" > last name</font> <input type="descr" size="20" name="descr" value="<?php echo $rows['lastname']; ?>" /><br/><br/>
    <font size="5" > gender </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['gender']; ?>" /><br/><br/>
	 <font size="5" > areacode </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['areacode']; ?>" /><br/><br/>
	  <font size="5" > phone </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['phone']; ?>" /><br/><br/>
	   <font size="5" > email </font><input type="descr2" size="40" name="descr2" value="<?php echo $rows['email']; ?>" /><br/><br/>
	    <font size="5" > postal code </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['zip']; ?>" /><br/><br/>
		 <font size="5" > street address </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['staddress']; ?>" /><br/><br/>
		  <font size="5" > street address2 </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['staddress2']; ?>" /><br/><br/>
		   <font size="5" > city </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['city']; ?>" /><br/><br/>
		   <font size="5" > state </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['state']; ?>" /><br/><br/>
		   <font size="5" > country </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['country']; ?>" /><br/><br/>
		   <font size="5" > month </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['month']; ?>" /><br/><br/>
		   <font size="5" > day </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['day']; ?>" /><br/><br/>
		   <font size="5" > year </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['year']; ?>" /><br/><br/>
		   
		   <font size="5" > course</font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['course']; ?>" /><br/>
		   

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br>

<input name="submit" id="submit4" type="submit" value="رجوع للخلف" />
<br/><br/><br/><br/>

</form>
	<br/><br/>
	


  
  
 



  </center>
  </div>
<div id="fotter4"></div>

<?php

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

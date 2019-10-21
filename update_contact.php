<?php
session_start();
include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];
$result = mysql_query("select * from contact where id ='$id3'");

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
if($go['updatecontact']=='1'){
?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>

	
<form name="form1" action="contact_control.php?id=<?php echo $id; ?>"  method="POST" >

<font size="8" > التحكم فى التسجيل </font>
   <br/><br/><br/><br/>
	<font size="5" > first name </font> <input type="text" name="id2" value="<?php echo $rows['name']; ?>" /><br/><br/>
	<font size="5" > last name</font> <input type="descr" size="20" name="descr" value="<?php echo $rows['last']; ?>" /><br/><br/>
    <font size="5" > gender </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['gender']; ?>" /><br/><br/>
	 <font size="5" > areacode </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['areacode']; ?>" /><br/><br/>
	  <font size="5" > phone </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['phone']; ?>" /><br/><br/>
	   <font size="5" > email </font><input type="descr2" size="40" name="descr2" value="<?php echo $rows['email']; ?>" /><br/><br/>
	    <font size="5" > Service Quality </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['service']; ?>" /><br/><br/>
		 <font size="5" > Overall hygiene </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['overall']; ?>" /><br/><br/>
		  <font size="5" > Responsive </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['responsive']; ?>" /><br/><br/>
		   <font size="5" > Kidness and helpfulness </font><input type="descr2" size="20" name="descr2" value="<?php echo $rows['kind']; ?>" /><br/><br/>
		   <font size="5" > message </font><br/>
		    <textarea cols="44" rows="10" value="" > <?php echo $rows['messege']; ?></textarea><br/><br/>
  

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br>

<input name="submit" id="submit4" type="submit" value="رجوع للخلف" />
<br/><br/>

</form>
	
	


  
  
 



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
</html> 
');
?>
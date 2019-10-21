<?php

session_start();
include('connec.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه صلاحيات المستخدم</title>
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

<form method="POST">
<center>
<font size="5">&nbsp; choose username </font>
<select name="username" style="width:200px; height:30px;">

<?php
$result = mysql_query("select * from prev order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['username']; echo(' </option>
');
}
?>


</select>
</center>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:780px; margin-top:-30px;" />


</form>



<br/><br/><br/>
  <table width="980" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">username</td>
      
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">password</td>
	  
      
	  
     

	  
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">update</td>
    </tr> 
	
	
	
	<?php

if(isset($_POST['submit'])){

$username = $_POST['username'];




	
	$result = mysql_query("select * from prev where username='$username' and type='admin'");
	
	while($row= mysql_fetch_array($result) )

{

?>

    <tr style="text-align:center;">
	<td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['username']; ?></td>

    <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['password']; ?></td>
      
      

   
	    
     
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="update_user.php?id='); echo $row['id'];  ?>"> <font color="white"> update </font></a> </td>
    </tr> 
	<?php
	
	}
	}
	
	?>

	
  </table>
</div>
<div id="fotter4"></div>
<?php
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

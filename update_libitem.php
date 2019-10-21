<?php

session_start();
include('connec.php');

$result = mysql_query("select * from proditem");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على الكتب</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {

$resueelt = mysql_query("select * from prev where id='$id' ");
$roeews = mysql_fetch_array($resueelt);
if($roeews['updatelibitem']=='1'){
?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<?php
$count=mysql_num_rows($result);

echo ("<h2><center> عدد الكتب  => $count  </h2></center>"); 

?>
<br/>

<form method="POST">



<center>
<font size="5" color="white">&nbsp; اختر قسم من المكتبه </font>
<br/>
<select name="prodname" style="width:200px; height:30px;">
<?php

$result = mysql_query("select * from product  order by id");
while($rows = mysql_fetch_array($result)){
echo('
<option> '); echo $rows['prodname']; echo(' </option>
');
}
?>


</select>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" id="" name="submit" 
  value="send" style="width:70px; height:40px;"  />
</center>



 <br/><br/>
 
 


</form>
 

  <table width="980" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
       <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم الكتاب</td>
     
	  <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">صورة المنتج</td>
      <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">مواصفات المنتج</td>
	  <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">تحميل الكتاب</td>
     

	
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Delete</td>
    </tr> 
	
	
	<?php
	
	if(isset($_POST['submit'])){

$prodname = $_POST['prodname'];

	$result = mysql_query("select * from proditem where place='$prodname'");
	
	while($row= mysql_fetch_array($result) )

{
?>

    <tr style="text-align:center;">
      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo $row['name'];  ?> </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo('<img src="'.$row['pic'].'" width="100px" height="100px"/> '); ?></td>
      <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['descr']; ?></td>
      <td style="width:160px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo('<a href="'.$row['down'].'" >'.' ');
			  
			   ?> <font color="#FFF" >Download </font> </a></td>

   
	    
      
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="delete.php?id3= '); echo $row['id']; echo('&id=');echo $id; echo('&table=proditem'); echo('&form=update_libitem'); ?>"> <font color="white"> delete </font></a> </td>
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

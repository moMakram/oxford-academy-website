<?php

session_start();
include('connec.php');

$result = mysql_query("select * from comm where perm='0'");

echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على التعليقات</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<?php
$count=mysql_num_rows($result);

echo ("<h2><center> عدد التعليقات =  $count  </h2></center>"); 

 
 ?>

  <table width="980" height="100" border="0">
    <tr style="background:#999; height:35px;">
      
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">الاسم</td>
	  <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">التعليق</td>
	
      
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">نشر فى الموقع</td>
	  <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">حذف</td>
      
    </tr> 
	
	
	<?php
	$result = mysql_query("select * from comm where perm='0'");
	
	while($row= mysql_fetch_array($result) )

{
?>

    <tr style="text-align:center;">
      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo $row['name']; ?> </td>
      <td style="width:160px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['comme']; ?></td>
	 
      
      <td style="width:130px; background-color:#03C; height:140px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><?php echo('<form method="POST"> <input type="hidden" value="'.$row['id'].'" name="id6" />

&nbsp; &nbsp; &nbsp;
<input type="submit"  name="submit" 
  value="نشر فى الموقع" style=" width:80px; height:33px; "    /></form>'); ?></td>
  
      <td style="width:130px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><?php echo('<form method="POST"> <input type="hidden" value="'.$row['id'].'" name="id6" />

&nbsp; &nbsp; &nbsp;
<input type="submit"  name="submit2" 
  value="حذف" style=" width:70px; height:33px; "    /> </form>'); ?></td>
  
	 
    </tr> 
	<?php
	
	}
	
	
if(isset($_POST['submit'])){

$id6 = $_POST['id6'];

///echo $id5;

$result = mysql_query(" update comm set perm='1' where id='$id6'  " ) ;



 if ($result){
echo ("تم النشر فى الموقع بنجاح");
echo("<br>");

}
else
{
echo "error";
}
}

if(isset($_POST['submit2'])){

$id6 = $_POST['id6'];

///echo $id6;

$result = mysql_query(" delete from comm  where id ='$id6' " );



 if ($result){
echo ("تم الحذف بنجاح");
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

///header("location:login.php");

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}
echo('
</body>
</html> 
');
?>

<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على اسئله الطلبة</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');
$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {

$result = mysql_query("select * from prev where id='$id' ");
$rows = mysql_fetch_array($result);
$user=$rows['username']; 
$pass=$rows['password'];
$result = mysql_query("select * from teacher where username='$user' and password='$pass' ");
$rowse = mysql_fetch_array($result);
$name=$rowse['name'];

if($rows['updatequestion']=='1'){
?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<center>
<font size="7"><u>&nbsp; التعديل على اسئله الطلبة </u></font></center>
<br/><br/>




<br/><br/><br/>
  <table width="980" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">الاسم</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">اسم الكورس</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">القسم</td>
	  <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">السؤال</td>
	  <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">الاجابة</td>
	  
	  <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">التعديل</td>
      
	  
     

	  
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">الحذف</td>
    </tr> 
	
	
	
	<?php







	
	$result = mysql_query("select * from question where teacher='$name' order by id ");
	
	while($row= mysql_fetch_array($result) )

{

$id2=$row['id2'];

?>

    <tr style="text-align:center;">
	<td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['name']; ?></td>

      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['course']; ?> </td>
      
	  
	 <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['section']; ?> </td>
      
      	 <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['ques']; ?> </td>
<td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['ans']; ?> </td>
   
	    
       <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="update_ques.php?id3 c= '); echo $row['id']; echo('&id='); echo $id; ?> "> <font color="white"> التعديل </font></a> </td>
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="delete2.php?id3= '); echo $row['id']; echo('&id='); echo $id; echo('&table=question'); echo('&form=updateque_form');  ?> "> <font color="white"> الحذف </font></a> </td>
    </tr> 
	<?php
	
	
	
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

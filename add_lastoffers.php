<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة اخر العروض</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addlastoffers']=='1'){

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST"  >

<font size="7px"><center>  اضافه اخر العروض </center> </font>
<br><br>




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> اسم الكورس </font>


<input type="text" name="course" size="50" />
</center>


<br><br>


<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> السعر </font>


<input type="text" name="price" size="50" />
</center>

<br><br>







<br>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<center>
		<font size="5"> ادخل وصف الكورس</font>
		<br/>
			<textarea id="" name="descr" rows="10" cols="60" >
				
			</textarea>
			
			
		
		




</center>


<br/><br/><br/>





<br><br>


<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة " style="width:93px; height:40px;"/>


</center>
<br/><br/>
</form>


<?php

if(isset($_POST['submit'])){

$course = $_POST['course'];
$price = $_POST['price'];
$descr = $_POST['descr'];






  $result = mysql_query("INSERT INTO lastoffers (course,price,descr)
 values('$course','$price','$descr')");
 echo "<br /><br/><br/>";
if ($result){
echo('<center>');
echo ("inserted");
echo('</center>');
echo("<br/><br/><br/>");

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

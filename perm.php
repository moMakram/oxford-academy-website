<?php
session_start();

include('connec.php');
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
if (isset($_SESSION['admin_session5']) ) {





if(isset($_POST['ok'])){

$idcom = $_POST['idcom'];
///echo $id5;





$result9 = mysql_query(" update comm set perm='1' where id='$idcom'   " ) ;


 if ($result){

////header("location:teacher.php?id=$id ");

echo " <font size='5px' color='red'><center> </center></font> <a href='teacher.php?id="; echo $id; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=teacher.php?id=";echo $id;  echo"\">";
 
}
else
{
///header("location:teacher.php?id=$id ");

echo " <font size='5px' color='red'><center> </center></font> <a href='teacher.php?id="; echo $id; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=teacher.php?id=";echo $id;  echo"\">";

}
}

}else{

///header("location:index.php");

echo " <font size='3px' ></font> <a href='index.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

}

echo('

</body>
</html> ');

?>







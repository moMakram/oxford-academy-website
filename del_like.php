<?php

session_start();

include('connec.php');


$id=$_GET['id'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];

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
if (isset($_SESSION['admin_session2']) ) {

echo('






<div id="container">

<br/><br/><br/><br/><br/>');



$result = mysql_query(" delete from likes where idstu='$id' and idpost='$id3'  " );


if($result)
{



///header("location:teachprofile.php?id=$id&id2=$id2 ");

echo " <font size='5px' color='red'><center> </center></font> <a href='teachprofile.php?id="; echo $rows['id']; echo"&id2="; echo $id2; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=teachprofile.php?id=";echo $id; echo"&id2="; echo $id2; echo"\">";




  echo('</center> ');
}

else
{

///header("location:teachprofile.php?id=$id&id2=$id2 ");

echo " <font size='5px' color='red'><center> </center></font> <a href='teachprofile.php?id="; echo $rows['id']; echo"&id2="; echo $id2; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=teachprofile.php?id=";echo $id; echo"&id2="; echo $id2; echo"\">";

}


echo('

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
</div>'); 


}else{

///header("location:index.php");

echo " <font size='3px' ></font> <a href='index.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

}

echo('

</body>
</html> ');

?>





<?php

session_start();
include ("connec.php");



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة صور الاحداث</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');


if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addalbum']=='1'){


echo('
<div id="add_pictures_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id='); echo $id; echo('"><div id="nav1"></div></a>
</div>
<div id="body2">
<br/><br/>
<center><font size="6"> اضافة صور الاحداث </font></center>
<form method="POST" enctype="multipart/form-data">
<font size="5">&nbsp; رفع الصوره من هنا </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
<form method="POST">
<center>
<br/><br/>
<font size="5" > اختر الحدث الخاص بالصور </font>
<select name="place">
');
$sele = mysql_query("select * from event order by id2");
			  
			while($rows = mysql_fetch_array($sele)){
			
			echo('
<option> '); echo $rows['title2']; echo(' </option>
');
}
echo('
</select>
</center>

<br/><br/><br/>
<center>
<font size="5">&nbsp; الترتيب </font>
<input type="text"  name="id2" /></center>
<br/><br/>
<input name="submit" type="submit" value="upload"  style="width:100px; height:30px;  position:absolute; margin-left:470px; margin-top:100px;" />
</form>
');

if(isset($_POST['submit'])){

$place = $_POST['place'];

$id2 = $_POST['id2'];



    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />";

        if (file_exists("photo/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "photo/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "photo/".$_FILES['file']['name'];





  $result = mysql_query("INSERT INTO album (link,place,id2)
 values('$dir','$place','$id2' )");
 echo "<br />";
if ($result){
echo ("inserted");
echo("<br>");

}
else
{
echo "error";
}



}

echo('


</div>
<div id="fotter"></div> ');


}else{

///header("location:control.php?id=$id ");

echo " <font size='5px' color='red'><center> </center></font> <a href='control.php?id="; echo $id; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=control.php?id=";echo $id;  echo"\">";

}
}else{

////header("location:login.php");

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}

echo('
</body>
</html> ');

?>

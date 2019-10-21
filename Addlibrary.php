<?php

session_start();
include ("connec.php");



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الاضافه فى المكتبه</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');


if (isset($_SESSION['admin_session']) ) {

echo('
<div id="add_pictures_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
<br/><br/>
<center><font size="6"> الاضافه فى المكتبه </font></center>
<form method="POST" enctype="multipart/form-data">
<br/>
<center>
<font size="5">&nbsp; اختر الكورس </font>

<select name="course">
');
$result = mysql_query("select * from courses order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['course']; echo(' </option>
');
}
echo('
</select>

</center>
<br/><br/>
<center>
<font size="5">&nbsp; رفع الكتاب من هنا </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
</center>
<br/><br/><br/>
<font size="5">&nbsp; عنوان الكتاب </font>
<input type="text" size="90" name="title" />

<br/><br/><br/>

<center>
<font size="5">&nbsp; الترتيب </font>
<input type="text"  name="id2" /></center>
<br/><br/>
<input name="submit" type="submit" value="upload"  style="width:100px; height:30px;  position:absolute; margin-left:470px; margin-top:100px;" />
</form>
');

if(isset($_POST['submit'])){

$course = $_POST['course'];
$title = $_POST['title'];
$id2 = $_POST['id2'];

echo $course;
echo $title;
echo $id2;

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

        if (file_exists("library/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "library/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "library/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "library/".$_FILES['file']['name'];


echo $dir;


  $result = mysql_query("INSERT INTO library (link,title,course,id2)
 values('$dir','$title','$course','$id2' )");
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

header("location:login.php");
}

echo('
</body>
</html> ');

?>

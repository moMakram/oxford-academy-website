<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه المهام</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {
$result = mysql_query("select * from prev where id='$id' ");
$rows = mysql_fetch_array($result);
$user=$rows['username']; 
$pass=$rows['password'];
$result = mysql_query("select * from teacher where username='$user' and password='$pass' ");
$rowse = mysql_fetch_array($result);
$idte=$rowse['id'];


if($rows['addtask']=='1'){


echo('

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id='); echo $id; echo('"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" enctype="multipart/form-data">

<font size="7px"><center>  اضافه المهام </center> </font>
<br><br>





<center>
<font size="5px">  الكورس  </font>

<select name="course" style="width:200px; height:30px;">
');
$result = mysql_query("select * from courses   order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['course']; echo(' </option>
');
}
echo('

</select>

</center>

<br><br>


<br><br>
<center>
<font size="5px"> اختر الميعاد  </font>
<select name="section" style="width:200px; height:30px;">

');
$result = mysql_query("select * from  type  order by id");
while($row = mysql_fetch_array($result)){
echo('
<option> '); echo $row['typee']; echo(' </option>
');
}
echo('


</select>

</center>
<br><br>







<br><br/><br/><br/>





<center>

<font size="5px"> ادخل المهام  </font>
<input type="text" name="task" size="123"/>


</center>




<center>
<font size="5">&nbsp; لرفع الملف من هنا </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
</center>










<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة " style=" width:85px; height:40px; font-family:"Comic Sans MS", cursive; color:#000000; "/>


</center>

</form>


');


if(isset($_POST['submit'])){


$course = $_POST['course'];
$section = $_POST['section'];
$task = $_POST['task'];



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

        if (file_exists("questions/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "questions/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "questions/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "questions/".$_FILES['file']['name'];





  $result = mysql_query("INSERT INTO tasks (course,section,link,task,id2)
 values('$course','$section','$dir','$task','$idte' )");
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
	
  </table>
</div>
<div id="fotter4"></div> ');

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

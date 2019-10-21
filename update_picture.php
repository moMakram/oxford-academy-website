<?php
session_start();
include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];

$result = mysql_query("select * from slider where id ='$id3'");

$rows=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على صور الرئيسية</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
if (isset($_SESSION['admin_session']) ) {
$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['updatepicture']=='1'){
?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>

<form method="POST" enctype="multipart/form-data">
<font size="8" > التعديل على صور الرئيسية </font>
<br/><br/>
<font size="5">&nbsp; رفع الصوره من هنا </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
	
<form name="form1"  method="POST" >


   <br/><br/><br/><br/>
	<font size="5" > الترتيب </font> <input type="text" name="id2" value="<?php echo $rows['id2']; ?>" /><br/><br/>
	<font size="5" > الوصف بالعربية </font> <input type="text" size="120" name="descr" value="<?php echo $rows['descr']; ?>" /><br/><br/>
    <font size="5" > الوصف بالانجليزية </font><input type="text" size="120" name="descr2" value="<?php echo $rows['descr2']; ?>" /><br/><br/>
  

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br/><br/><br/><br/><br/><br/>

<input name="submit" id="submit4" type="submit" value="حفظ التعديلات" />


</form>
	
</form>	


  
  
  <?php

    if(isset($_POST['submit'])){
	
	
	
	
	
    if ($_FILES["file"]["error"] > 0)
    {
       /// echo "Error Code: " . $_FILES["file"]["error"];
        echo "<br />";
    }
    else
    {
      /*  echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />"; */

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
	


if($_FILES["file"]["error"] > 0)
{
	$result2 = mysql_query(" update slider set descr='$_POST[descr]',id2='$_POST[id2]',descr2='$_POST[descr2]' where id='$_POST[id]'  " ) ;

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");




echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatepic_form.php?id="; echo $id; echo"'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"4;URL=updatepic_form.php?id="; echo $id; echo"\">";

echo('</center>');
}

else
{

echo("error");
}

}else{



	$result2 = mysql_query(" update slider set link='$dir',descr='$_POST[descr]',id2='$_POST[id2]',descr2='$_POST[descr2]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");




echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatepic_form.php?id="; echo $id; echo"'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"4;URL=updatepic_form.php?id="; echo $id; echo"\">";

echo('</center>');
}

else
{

echo("error");
}


}

}

echo('

  </center>
  </div>
<div id="fotter4"></div>
');
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
</html> ');
?>
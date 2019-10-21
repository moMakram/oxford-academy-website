<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه كتاب </title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addlibitem']=='1'){

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" enctype="multipart/form-data" >

<font size="7px"><center>  اضافه كتاب </center> </font>
<br><br>

<center>
<font size="5px">  صوره الكتاب  </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:10px; margin-top:0px;" />
<select name="choose" style="width:130px; height:30px; border-radius:4px; border:groove 1px #000; position:absolute; margin-left:30px; margin-top:5px;">
<?php
$select = mysql_query("select * from product order by id2 ");

while($row = mysql_fetch_array($select)){


			
			echo('
<option>'); echo $row['prodname']; echo('</option>
');
}
?>
</select>

</center>

<br><br>


<center>
<font size="5px">  ملف تحميل الكتاب </font>
<input name="file2" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:10px; margin-top:0px;" />
</center>

<br/><br/>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> اسم الكتاب </font>


<input type="text" name="name" size="40px" />
</center>

<br><br>




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> مواصفات الكتاب </font>


<textarea name="descr" id="descr" cols="58" rows="10" placeholder="مواصفات المنتج" ></textarea>
</center>


<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> الترتيب </font>


<input type="text" name="id2" />
</center>

<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة "/>


</center>

</form>


<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$id2 = $_POST['id2'];

$descr = $_POST['descr'];

$choose = $_POST['choose'];

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
	   


    if ($_FILES["file2"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file2"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file2"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file2"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file2"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file2"]["tmp_name"];
        echo "<br />";

        if (file_exists("photo/" . $_FILES["file2"]["name"]))
        {
            echo "A file with the name " . $_FILES["file2"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file2"]["tmp_name"], "photo/" . $_FILES["file2"]["name"]);
            echo "The file was stored in: " . "photo/" . $_FILES["file2"]["name"];
        }
    }
	   $imname2 =  $_FILES["file2"]["name"];
	   $dir2 = "photo/".$_FILES['file2']['name'];
	   






  $result = mysql_query("INSERT INTO proditem (pic,down,place,name,descr,id2)
 values('$dir','$dir2','$choose','$name','$descr','$id2' )");
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

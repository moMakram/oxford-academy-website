<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافه صفحه المحاضر</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {


$id=$_GET['id'];
$prev = mysql_query("select * from prev where id='$id' ");
$go = mysql_fetch_array($prev);
if($go['addcv']=='1'){

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" enctype="multipart/form-data" >

<font size="7px"><center>  اضافه صفحه المحاضر </center> </font>
<br><br>

<center>
<font size="5px">  صوره المحاضر  </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:10px; margin-top:0px;" />


</center>

<br><br>
<center>
<font size="5px">  اسم المحاضر  </font>
<select name="name" style=" margin-top:40px; margin-right:-40px; width:171px; height:26px; border-radius:20px; font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	">

	<?php

$result = mysql_query("select * from teacher  order by id");
while($roww = mysql_fetch_array($result)){
echo('
<option> '); echo $roww['name']; echo(' </option>
');
}
?>

</select>
</center>
<br><br>








<br>





<center>


<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : "Bold text", inline : "b"},
			{title : "Red text", inline : "span", styles : {color : "#ff0000"}},
			{title : "Red header", block : "h1", styles : {color : "#ff0000"}},
			{title : "Example 1", inline : "span", classes : "example1"},
			{title : "Example 2", inline : "span", classes : "example2"},
			{title : "Table styles"},
			{title : "Table row 1", selector : "tr", classes : "tablerow1"}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</head>
<body role="application">


	<div>
		

		

		<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
		
		<font size="5"> ادخل معلومات عن المحاضر </font>
		<div>
			<textarea id="info" name="info" rows="15" cols="80" style="width: 80%">
				
			</textarea>
			
			
		</div>
		
		

		<!-- Some integration calls -->
		
		<a href="javascript:;" onclick= alert(tinyMCE.get("elm1").getContent());return false;>[Get contents]</a>
		<a href="javascript:;" onclick= alert(tinyMCE.get("elm2").getContent());return false;>[Get contents]</a>
		
		 

</script>
</body>

		<br />
		
		
		
	</div>


<script type="text/javascript">
if (document.location.protocol == /"file:/") {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>








</center>



<br/><br/><br/>





























<br><br>


<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة " style=" font-size:16px;
	font-family:Arial, Helvetica, sans-serif;  width:80px; height:40px;"/>


</center>

</form>


<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$info = $_POST['info'];




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
	   








  $result = mysql_query("INSERT INTO cv (pic,name,info)
 values('$dir','$name','$info' )");
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

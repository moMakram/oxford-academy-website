<?php
session_start();
include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];

$result = mysql_query("select * from question where id ='$id3'");

$rows=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اجابه السؤال</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<?php
$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {

$result = mysql_query("select * from prev where id='$id' ");
$roo = mysql_fetch_array($result);


if($roo['updatequestion']=='1'){

?>
<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php?id=<?php echo $id; ?>"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>


<font size="8"><u> السؤال والاجابه عليه </u></font>

	
<form name="form1"  method="POST" >


   <br/><br/>
	


  
  
  
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
		
		
		
		<br/><br/>
		<font size="5"> السؤال </font>
		
		<div>
			<textarea id="elm2" name="question" rows="15" cols="80" style="width: 80%">
				<?php
			echo $rows['ques'];
			?>
				
			</textarea>
		</div> 
		<br/><br/><br/><br/>
		<font size="5"> الاجابه </font>
		
		<div>
			<textarea id="elm3" name="answer" rows="15" cols="80" style="width: 80%">
				<?php
			echo $rows['ans'];
			?>
				
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

  
  
  
  
  
  
  

  
	
 

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      




<br/><br/><br/><br/>
<center>
<input name="submit" id="submit" type="submit" value="حفظ التعديلات" />
</center>
<br/>


<br/><br/>

	
</form>	


  
  
  <?php

    if(isset($_POST['submit'])){
	
	
	

	$result2 = mysql_query(" update question set  ques='$_POST[question]',ans='$_POST[answer]' where id='$_POST[id]'  " ) ;

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");




echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateque_form.php?id=";echo $id; echo"'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"10;URL=updateque_form.php?id=";echo $id; echo"\">";

echo('</center>');
}

else
{

echo("error");
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
<?php
session_start();
include('connec.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oxford Academy</title>
<link href="Css/Style2.css" rel="stylesheet" type="text/css" />

<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8AAQEB/gAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP////8A////AP///wD///8A////AP///wD///8A////AP///wD///8A4M2+SZBdGP+XXR//uo5qrP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8AZkUm/tKlUf/PoVn/zJxh/8qYaP9/TiX/////AP///wD///8A////AP///wD///8A////AP///wD///8AmGQ64c6XGP/JkB//xYom/8CCLf+7fDX/t3U8/3FJKf////8A////AP///wD///8A////AP///wD///8A////ALZ6Df+0fgj/r3oH/6VwC/+eaBD/m2IV/51fGv+fXCL/8/DuEf///wD///8A////AP///wD///8A////ANfY2P/7+/v/+vj3/8WQZv/7+vn/+ff1//r49//7+vn/5c68/9Ktj/////8A////AP///wD///8A////AP///wDYuKH/8/Py/+7n4P/z8/P/3sKt//T09P/w8fH/8/Pz//Hy8v/T1NX/////AP///wD///8A////AP///wD///8Abmde/6NuJf+Yah7/jWYe/4JhHf97Whz/e1oe/4ZfH/+UZCP/fWhT/////wD///8A////AP///wD///8A////AGBRRf+0bRn//////79+Dv/Dgwf/yY4E/8SFCf++fBD/uHMV/0sxFP////8A////AP///wD///8A////AP///wBDJxH//fv5/9Oocf/+/v7//v79/86bLf/Pmiv/wYIM/7t4Ev9JLw//////AP///wD///8A////AP///wD///8AQCUP/69lHv+1bhn/8ODL/79+Dv/Qn0P/58yR/86cOf/YsHT/STAN/////wD///8A////AP///wD///8A////AEAlDv/bupr/0qd0//7+/v/z6NT/6tSp//379v/+/v3/wYAL/z4oCv////8A////AP///wD///8A////AP///wBBJQ3/r2Qf/7RtGf+6dhT/ypU6/8aJCf/Xpzj/zI8I/82PC/8+Jwj/////AP///wD///8A////AP///wD///8ASC4Y/69kH/+1bhn/3LqH/8ODDv/Mjwj/1ZwD/9mfBv/epAf/QCkJ/////wD///8A////AP///wD///8A////AEYpDv+wZh7/unMY/8OBEv/Njwz/2Z8G/+StAv/qtAP/46kG/0MqCP////8A////AP///wD///8A////AP///wD7+/sE////ANS8p/jZuJn/uXpF/7d2QP/dvpz/1rul9v///wD6+voF////AP///wD///8A8A8AAP4/AAD4HwAA8A8AAPAPAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />




<link rel="stylesheet" href="Css/global.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>






<style type="text/css">

.main {
width:216px;
margin-left:19px;
position:absolute;
margin-top:170px;

}

.month {
background-color:#000;
font:bold 12px verdana;
color:white;
}

.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}

.days {
font-size: 12px;
font-family:verdana;
color:black;
background-color:#CCC;
padding: 2px;
}

.days #today{
font-weight: bold;
color:#F00;
}

</style>


<script type="text/javascript"  src="Javascript/basiccalendar.js">

/***********************************************
* Basic Calendar-By Brian Gosselin at http://scriptasylum.com/bgaudiodr/
* Script featured on Dynamic Drive (http://www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

</script> 

<link href="Css/animate.css" rel="stylesheet" type="text/css" />
</head>

<body background="Images/background.png" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  >
<div id="body">
<?php
if (isset($_SESSION['admin_session2']) ) {

echo('
<div id="header">
<div id="countries">
<a href="index2.php"><div id="box1"><div id="arabic"></div></div></a>
<a href="index.php"><div id="box2"><div id="english"></div></div></a>
<a href="index2.php"><div id="Egypt"></div></a>
<a href="index.php"><div id="England"></div></a>
<div id="column"></div>
<div id="column2"><div id="column3"></div></div>
</div>
<a href="index.php">  <div id="logo" class="animated bounceIn"></div></a>
<div id="word"></div>

');
$id=$_GET['id'];

$result = mysql_query("select * from student where id='$id'");
$row = mysql_fetch_array($result);
$id2=$row['id'];
echo('
<br/><br/>
<div id="welcome"><font size="30" color="white" ><p align="right"> welcome  </p></font></div>
<div id="stu"><font size="30" color="red" ><p align="right"> '); echo $row['name']; echo('  </p></font></div>






<div id="iconcover">
  <a href="http://www.facebook.com"><div id="facebook"></div></a>
<a href="http://www.twitter.com"><div id="twitter"></div></a>
<a href="http://www.google.com"><div id="google"></div></a>
<a href="http://www.rss.com"><div id="rss"></div></a>
<a href="http://www.wikipedia.com"><div id="wikipedia"></div></a>

</div>

</div>





<br/><br/><br/><br/>










	
	<a href="library.php?id='); echo $row['id']; echo('">
	<div id="Grafic22">
<div id="Graficwords22"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> library </b></center></font></div>
</div></a>
		<br/><br/><br/><br/><br/><br/><br/>
		<a href="lastoffers.php?id='); echo $row['id']; echo('">
	<div id="Grafic22">
<div id="Graficwords22"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> last offers </b></center></font></div>
</div>	</a>

	<br/><br/><br/><br/><br/><br/><br/>
		');
			  $results = mysql_query("select * from student where id='$id'");
$ro = mysql_fetch_array($results);
		echo"<a href='question.php?id="; echo $ro['id']; echo"&name="; echo $ro['name'];     echo"'>";
	echo('
	<div id="Grafic22">
<div id="Graficwords22"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> questionaire </b></center></font></div>
</div>	</a>
	





	<div id="Grafic33">
<div id="Graficwords33"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> time table </b></center></font></div>
</div>


<!--<div id="timetable"><br/><br/> '); echo $row['time']; echo('</div>-->


');
?>
<div id="timetable">

<center>
  <table width="570" height="100" cellpadding="10" border="5">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;"><br/>C.N</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>Section</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>Days</td>
	  <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>From</td>
	   <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>To</td>
	   <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>lecturer</td>
	  
	  
    </tr> 
	
	
	<?php
	$result = mysql_query("select * from stucourse where id2=$id2");
	
	while($row= mysql_fetch_array($result) )

	
{
?>
	
	 <tr style="text-align:center;">
	<td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $row['course'];  ?></td>

      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $row['section'];  ?> </td>
      
	  
	 <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/><?php echo $row['day'];  ?></td>
      
      <?php
	$resulte = mysql_query("select * from type where typee='$row[section]'");
	
	while($rows= mysql_fetch_array($resulte) )

	
{
?>

   <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $rows['frome'];  ?></td>
	 <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $rows['too'];  ?></td>   
     
	 <?php
	
	
	}
	
	?>
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $row['teacher'];  ?></td>
    </tr> 
	
	<?php
	
	
	}
	
	?>
	
	<tr>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	</tr>

	
	
	
	
	
	

	
	

	
	
</table>
</center>
</div>

	<div id="Grafic44">
<div id="Graficwords33"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> tasks </b></center></font></div>
</div>


<div id="timetable2">




<center>
  <table width="570" height="100" cellpadding="10" border="5" style=" border-radius:200px; ">
  

    <tr style="background:#999;  height:35px;">
	  <td style="width:60px; height:46px;  font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;"><br/>C.N</td>
	  <td style="width:10px; height:46px;  font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;"><br/>section</td>
      <td style="width:160px; height:46px;  font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>Task</td>
      <td style="width:60px; height:46px;  font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>Download</td>
	  <td style="width:60px; height:46px;  font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;"><br/>upload</td>
	 
	  
    </tr> 
	
		<?php
	$resultes = mysql_query("select * from stucourse where id2=$id2");
	
	while($rowes= mysql_fetch_array($resultes) )

	
{

$name=$rowes['teacher'];
$resu = mysql_query("select * from teacher where name='$name' ");
$ro = mysql_fetch_array($resu);
$idte=$ro['id'];
   
	$resultess = mysql_query("select * from tasks where course='$rowes[course]' and section='$rowes[section]' and id2='$idte'");
	
	while($rowse= mysql_fetch_array($resultess) )

	
{
?>
	
	
	
	 <tr style="text-align:center;">
	<td style="width:60px; background-color:#03C;  height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $rowse['course']; ?> </td>
<td style="width:10px; background-color:#03C;  height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $rowse['section']; ?> </td>
      <td style="width:30px; background-color:#03C;  height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo $rowse['task']; ?></td>
      
	  
	 <td style="width:30px; background-color:#03C;  height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/> <?php echo('<a href="'.$rowse['link'].'" >'.' ');
			  
			   ?> <font color="#FFF" >Download </font> </a></td>
      <?php
	  
	  $results = mysql_query("select * from student where id='$id'");
$ro = mysql_fetch_array($results);
      
?>
   <td style="width:50px; background-color:#03C;  height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><br/><?php echo"<a href='upload.php?id="; echo $ro['id']; echo"&name="; echo $ro['name']; echo"&course="; echo $rowse['course']; echo"&section="; echo $rowse['section']; echo"&teacher="; echo $rowes['teacher'];    echo"'><font color='#FFF' > upload </font></a>"; ?> 
   
   </td>
	
    </tr> 
	
	<?php
	
	
	}
	}
	
	?>
	
	
	
	
	<tr>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	<td style="width:50px; background-color:#03C; height:14px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	<br/>
	</td>
	
	</tr>




</table>

</div>

<?php
echo('

	<div id="Grafic55">
<div id="Graficwords33"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> lecturers </b></center></font></div>
</div>

<div id="timetable3">
<form method="post">
<p align="right">

<select name="teach" style=" margin-top:40px; margin-right:70px; width:171px; height:26px; border-radius:20px; font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	background-color:#0076f9;
	font-color:#FFF; text-align:center;">

	');

$result = mysql_query("select * from cv  order by id");
while($roww = mysql_fetch_array($result)){
echo('
<option> '); echo $roww['name']; echo(' </option>
');
}
echo('

</select></p>


<input type="submit" name="submit" value="go" style="position:absolute;
	width:78px;
	height:28px;
	margin-top:-26px;
	margin-left:130px;
	border-radius:20px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	background-color:#0076f9;
	font-color:#FFF;
	z-index:auto;
	"/>

</form>
 </div>
 
 ');
 if(isset($_POST['submit'])){
 
 $teach = $_POST['teach'];
 
$result = mysql_query("select * from cv where name='$teach'  order by id");
$rowed = mysql_fetch_array($result);
$id2=$rowed['id'];

 
 
///header("location:teachprofile.php?id=$id&id2=$id2 ");

echo " <font size='5px' color='red'><center> </center></font> <a href='teachprofile.php?id="; echo $rows['id']; echo"&id2="; echo $id2; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=teachprofile.php?id=";echo $id; echo"&id2="; echo $id2; echo"\">";




}
echo('
 <a href="logout2.php">
 	<div id="Grafic66">
<div id="Graficwords33"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> Sign Out </b></center></font></div>
</div>
 </a>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>











<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/>

<div id="fotterh">
  <div id="thebest"></div>

<div id="copyrights"></div>


</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");

</script> ');

}else{

///header("location:index.php");

echo " <font size='3px' ></font> <a href='index.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

}
echo('
</body>
</html>
');
?>
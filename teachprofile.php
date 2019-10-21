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
$idtea=$_GET['id2'];



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

');

$resultes = mysql_query("select * from cv where id='$idtea'  order by id");
$rows = mysql_fetch_array($resultes);
echo('
<div id="teabox"> 
<div id="teapic">
 <center> <img src="'.$rows['pic'].'" width="140px" height="146px" style=" border-radius:20px;"/></center>
</div>
<div id="teaname">
<center> '); echo $rows['name']; echo(' </center>
</div>
<div id="teainfo">
<center><b><u> -:معلومات </u> </b></center>
</div>
<div id="infor"><br/>
'); echo $rows['info']; echo('
</div>


 </div>
 
 
 
 
 <div id="teacomm">
 
 	');

$resul = mysql_query("select * from posts where id2=$idtea  order by id");
while($roww = mysql_fetch_array($resul)){
$id4=$roww['id2'];
$id5=$roww['id'];
echo('

<div id="comm">

<div id="teapiccomm">
');
$resulte = mysql_query("select * from cv where id='$id4' ");
$ro = mysql_fetch_array($resulte);
echo('
 <center> <img src="'.$ro['pic'].'" width="63px" height="61px" style=" border-radius:4px;"/></center>
</div>

<div id="teanamecomm">
<center><b> &nbsp; &nbsp;&nbsp; &nbsp;'); echo $ro['name']; echo(' </b></center>
</div>

<div id="inforcomm">
<br/>
<center><b>
 '); echo $roww['post'];
 echo('
</b></center>
<br/>
</div>

');
if($roww['down']!=''){
 echo('<a href="photo/'.$roww['down'].'" >'.' '); echo('<div id="downcomm"><div id="downwordd"><font color="#FFFFFF"><b> تحميل </b></font></div></div></a>
 ');
 }
 echo('

</div> <!-- close the comment -->














<div id="comme">
<div id="liketab">

');
$res = mysql_query("select * from likes where idstu='$id' and idpost='$id5' ");
$count=mysql_num_rows($res);

if($count==1){
echo('
<a href="del_like.php?id='); echo $id; echo('&id2='); echo $idtea; echo('&id3='); echo $id5; echo(' "><div id="likeword"><font color="#000000">UNLIKE</font></div></a>  
');
}else{
echo('
<a href="add_like.php?id='); echo $id; echo('&id2='); echo $idtea; echo('&id3='); echo $id5; echo(' "><div id="likeword"><font color="#000000">LIKE</font></div></a> ');
}

$res2 = mysql_query("select * from likes where idpost='$id5'  ");
$count2=mysql_num_rows($res2);
echo('


<div id="like"><center>'); echo $count2; echo(' like this</center></div>
</div>

<div id="comme2">

<!-- will repeat comment -->

	');

$commen = mysql_query("select * from comm where id2='$roww[id]' AND perm='1'  order by id");
while($co = mysql_fetch_array($commen)){

if($co['type']=='student'){



if($co['id2']=='$id')
{
echo('
<form method="POST" action="del_comm3.php?id=');echo $id; echo('&idtea='); echo $idtea;  echo('">

<input type="hidden" value="'.$co['id'].'" name="idcomee" />

<input type="submit" name="dele"  value="x"/>

</form> ');
}
echo('

<div id="commentmak">

<div id="commentname"><center><b> '); echo $co['name']; echo(' </b></center> </div>
<div id="thecomme"> 
<br/>
<center><b>
 '); echo $co['comme']; echo('
</b></center>
<br/>

 </div>

<div id="bordmak"></div>
</div> <!-- end of repeat -->


');
}else{

echo('




<div id="commentmak">');
$name8=$co['name'];
echo('
<div id="commentname"><center><b> '); echo $co['name']; echo(' </b></center> </div>

<div id="teapiccomm2">
');
$pic = mysql_query("select * from cv where name='$name8' ");
$pict = mysql_fetch_array($pic);
echo('
 <center> <img src="'.$pict['pic'].'" width="63px" height="61px" style=" border-radius:4px;"/></center>
</div>

<div id="thecomme"> 
<br/>
<center><b>
  '); echo $co['comme']; echo('
</b></center>
<br/>

 </div>

<div id="bordmak"></div>
</div> <!-- end of repeat -->
');
}
}


echo('





<br/>
<form method="POST">


<input type="hidden" value="'.$roww['id'].'" name="id5" />
<textarea name="comment" cols="40px" rows="4px" style=" border-radius:10px;  " placeholder="write your comment here"></textarea>
&nbsp; &nbsp; &nbsp;
<input type="submit"  name="submitee" 
  value="ok" style=" width:70px; height:33px; "    />
</form>



<br/><br/><br/>
 </div> 
<!-- close the comme2 -->


 </div> <!-- close the comme -->
 
 
 
 <br/><br/><br/><br/><br/><br/><br/>
  ');
 }
 
 
 
 
if(isset($_POST['submitee'])){

$id5 = $_POST['id5'];
///echo $id5;

$comment = $_POST['comment'];

$results = mysql_query("select * from student where id='$id'  order by id");
$stu = mysql_fetch_array($results);
$name=$stu['name'];


  $result = mysql_query("INSERT INTO comm (comme,name,id2,type)
 values('$comment','$name','$id5','student' )");

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
 
 












 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <br/><br/><br/><br/>
 
 

</div>



	


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
<?php
session_start();
include ("connec.php");



if(isset($_POST['submit'])){



$name = strip_tags($_POST['name']);
$question = strip_tags( $_POST['question']);






 $time =date('H :m');
    if($name!='' && $question!=''){
	
	///if($addr!=''){
	///if($email!=''){
	
	 $date=date("Y-m-d");
	////echo $time =date('H :i');
	
	$up = mysql_query("insert into service (name,question,date,time,place) values  ('$name','$question','$date','$time','الانجليزية')  ") or die( mysql_error());
	
	
	
	
  

echo('

<script src="jquery-1.9.1.min.js"> </script> ');
echo"

 <script>
$(document).ready(function(e) {
	
  
  	if($up){
			alert('the question was sent ...... waiting the answer very soon');
			
			return;
			
		}
		
		
		
		
	});
	
	
</script> ";

	}else{
	
	
	echo('

<script src="jquery-1.9.1.min.js"> </script> ');
echo"

 <script>
$(document).ready(function(h) {
	
  

			alert('the question was not sent ... please try again!');
			
			return;
			
		
		
		
		
	});
	
	
</script> ";






		
		
			
	

  
	 
	 
   
	
	
	
	
	
	}
	}
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services</title>
<link href="Css/Style2.css" rel="stylesheet" type="text/css" />

<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8AAQEB/gAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP////8A////AP///wD///8A////AP///wD///8A////AP///wD///8A4M2+SZBdGP+XXR//uo5qrP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8AZkUm/tKlUf/PoVn/zJxh/8qYaP9/TiX/////AP///wD///8A////AP///wD///8A////AP///wD///8AmGQ64c6XGP/JkB//xYom/8CCLf+7fDX/t3U8/3FJKf////8A////AP///wD///8A////AP///wD///8A////ALZ6Df+0fgj/r3oH/6VwC/+eaBD/m2IV/51fGv+fXCL/8/DuEf///wD///8A////AP///wD///8A////ANfY2P/7+/v/+vj3/8WQZv/7+vn/+ff1//r49//7+vn/5c68/9Ktj/////8A////AP///wD///8A////AP///wDYuKH/8/Py/+7n4P/z8/P/3sKt//T09P/w8fH/8/Pz//Hy8v/T1NX/////AP///wD///8A////AP///wD///8Abmde/6NuJf+Yah7/jWYe/4JhHf97Whz/e1oe/4ZfH/+UZCP/fWhT/////wD///8A////AP///wD///8A////AGBRRf+0bRn//////79+Dv/Dgwf/yY4E/8SFCf++fBD/uHMV/0sxFP////8A////AP///wD///8A////AP///wBDJxH//fv5/9Oocf/+/v7//v79/86bLf/Pmiv/wYIM/7t4Ev9JLw//////AP///wD///8A////AP///wD///8AQCUP/69lHv+1bhn/8ODL/79+Dv/Qn0P/58yR/86cOf/YsHT/STAN/////wD///8A////AP///wD///8A////AEAlDv/bupr/0qd0//7+/v/z6NT/6tSp//379v/+/v3/wYAL/z4oCv////8A////AP///wD///8A////AP///wBBJQ3/r2Qf/7RtGf+6dhT/ypU6/8aJCf/Xpzj/zI8I/82PC/8+Jwj/////AP///wD///8A////AP///wD///8ASC4Y/69kH/+1bhn/3LqH/8ODDv/Mjwj/1ZwD/9mfBv/epAf/QCkJ/////wD///8A////AP///wD///8A////AEYpDv+wZh7/unMY/8OBEv/Njwz/2Z8G/+StAv/qtAP/46kG/0MqCP////8A////AP///wD///8A////AP///wD7+/sE////ANS8p/jZuJn/uXpF/7d2QP/dvpz/1rul9v///wD6+voF////AP///wD///8A8A8AAP4/AAD4HwAA8A8AAPAPAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="Css/animate.css" rel="stylesheet" type="text/css" />
</head>

<body background="Images/1.png" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="body">
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




<div id="signin">

<div id="username">
<form  method="POST">
  <!--<span id="sprytextfield1"> -->
 
  <label for="username"></label>
  
  <input type="text" name="username2" id="username"  placeholder=" user name"  />
 <!-- <span class="textfieldRequiredMsg">A value is required.</span></span>--></div>

<div id="password">
  
    <!--<span id="sprypassword1">-->
	
      <label for="password"></label> 
	  
      <input type="password" name="password2" id="password"  placeholder=" password"  />
	  
      <!--<span class="passwordRequiredMsg">A value is required.</span></span>-->
  
</div>
<div id="radiobutton">

  <!--<span id="spryradio1">-->
    <label>
      <input type="radio" name="radiobutton" value="Remmber me on this computer" id="radiobutton_0" />
      Remmber me on this computer</label>
    <br />
    <!--<span class="radioRequiredMsg">Please make a selection.</span></span>-->

</div>
<div id="pencil"></div>
<div id="login"></div>
<div id="Login">
<input name="submite" type="submit" 
	  style="position:absolute;
	width:94px;
	height:26px;
	left: 13px;
	top: 83px;" id="submite" value="login" />
</div>

<div id="cancel">

<input name="cancel" type="reset" id="cancel" value="cancel" />
</div>

</form>









<?php

if(isset($_POST['submite'])){

$username = $_POST['username2'];
$password = $_POST['password2'];




// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

 


  $result = mysql_query("select * from student where username = ('$username') and password = ('$password')");
  $rows = mysql_fetch_array($result);
$count = mysql_num_rows( $result);

  $result2 = mysql_query("select * from teacher where username = ('$username') and password = ('$password')");
  $rows2 = mysql_fetch_array($result2);
$count2 = mysql_num_rows( $result2);



if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
///session_register("username");
///session_register("password");

////session_start();

$username = stripslashes($username);
$password = stripslashes($password);

$_SESSION['admin_session2'] = "$username";

echo('<br><br><br><br><br><br><br><br><br><br><br/><br/><br/>');
echo " <font size='5px' color='red'><center>اذا لم يتم نقلك تلقائياً </center></font> <a href='profile.php?id="; echo $rows['id']; echo"'><font size='5px'><center> اضغط هنا </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"5;URL=profile.php?id="; echo $rows['id']; echo"\">";




}

else if($count2==1){

$username = stripslashes($username);
$password = stripslashes($password);

$_SESSION['admin_session5'] = "$username";

$name=$rows2['name'];
$result3 = mysql_query("select * from cv where name='$name'");
  $rows3 = mysql_fetch_array($result3);


echo('<br><br><br><br><br><br><br><br><br><br><br/><br/><br/>');
echo " <font size='5px' color='red'><center>اذا لم يتم نقلك تلقائياً </center></font> <a href='teacher.php?id="; echo $rows3['id']; echo"'><font size='5px'><center> اضغط هنا </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"5;URL=teacher.php?id="; echo $rows3['id']; echo"\">";




}

else {

echo('<br><br><br><br><br><br><br><br><br><br><br/><br/><br/>');
echo (' <font size="4px" color="white" ><center> كلمه المرور او الرقم السرى خطأ </center></font>');

}


}



echo('

</div>
');
?>




<div id="iconcover">
  <a href="http://www.facebook.com"><div id="facebook"></div></a>
<a href="http://www.twitter.com"><div id="twitter"></div></a>
<a href="http://www.google.com"><div id="google"></div></a>
<a href="http://www.rss.com"><div id="rss"></div></a>
<a href="http://www.wikipedia.com"><div id="wikipedia"></div></a>

</div>

</div>
<div id="bigmenu"> <a href="index.php">
  <div id="homepage2"></div>
  </a> <a href="events.php">
  <div id="events"></div>
  </a> <a href="contactUs.php">
  <div id="contactus"></div>
  </a> <a href="Servcies.php">
  <div id="services2"></div>
  </a> <a href="Reservation.php">
  <div id="reservation"></div>
  </a>
  <div id="menu2">
  
  <div id="new1"></div>
  <div id="marquee">
      <marquee onmouseover="this.stop();" onmouseout="this.start();">
    		 <?php

include('connec.php');
 
	 include('enmarquee.php');
	 ?>
</marquee>
    </div>
  <div id="new2"></div>
 <input name="" type="text" id="search" value=" search users...." placeholder=" search users...." onfocus="this.value=(' ');"/>

  </div>
</div>
<div id="servciesimg"></div>

<div id="Askus">
<div id="Askusword"></div>

</div>
<div id="question"></div>
<form method="post">
<input name="name" type="text" id="textfiled16" value="   type your name here......"  placeholder="   type your name here......" onfocus="this.value=('   ');"/>

<textarea name="question" cols="" rows="" wrap="virtual" id="textarea2" value=" type your question here......"   placeholder=" type your question here......" onfocus="this.value=(' ');"></textarea>

<input type="submit" id="sub" name="submit" 
  value="send"  />
</form>
<br/><br/><br/>
<div id="Answers">
<div id="Answersword"></div>
</div>
<?php
 
	  $sel = mysql_query("select * from service where permis='1' ");
			  
			while($row = mysql_fetch_array($sel)){
			
			echo('

<!--<input name="" type="text" id="question2" value=""   placeholder="   Question...." /> -->


<div id="question2"> <center><b> '); echo $row['question']; echo(' </b></center> </div>

<div id="textarea3"><font> '); echo $row['answer']; echo(' </font></div>
<!--<textarea name="" cols="20" rows="30" id="textarea3"   > </textarea> -->


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

');
}
?>
<!-- end of answers -->

<!--
<input name="" type="text" id="question2" value="   Question...."   placeholder="   Question...." onfocus="this.value=(' ");"/>

<textarea name="" cols="" rows="" id="textarea3"    placeholder="  Answers...." onfocus="this.value=(' ");"></textarea> -->




<div id="fotters">
  <div id="thebest"></div>

<div id="copyrights"></div>


</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");

</script>
</body>
</html>

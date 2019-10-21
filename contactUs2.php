<?php
session_start();
include ("connec.php");




if(isset($_POST['submit'])){



$last = strip_tags($_POST['lastname']);
$first = strip_tags($_POST['firstname']);
$phone = strip_tags( $_POST['phone']);
$gender = strip_tags($_POST['gender']);
$areacode = strip_tags( $_POST['areacode']);
$email = strip_tags($_POST['email']);
$messege = $_POST['messege'];
///$service = $_POST['service'];
///$overall = $_POST['overall'];
///$responsive = $_POST['responsive'];
///$kind = $_POST['kind'];






  if($last!='' && $first!='' && $phone!='' && $gender!='' && $areacode!='' && $messege!=''&& $email!='' && $_POST['service']!='' && $_POST['overall']!='' && $_POST['responsive']!='' && $_POST['kind']!='')  {
	
	$up = mysql_query("insert into contact (last,phone,areacode,gender,email,messege,name,service,overall,responsive,kind) values  ('$last','$phone','$areacode','$gender','$email','$messege', '$first','$_POST[service]' ,'$_POST[overall]' ,'$_POST[responsive]' ,'$_POST[kind]')  ") or die( mysql_error());
	
	
	
	
  

echo('

<script src="jquery-1.9.1.min.js" type="text/javascript"> </script> ');
echo"

 <script>
$(document).ready(function(h) {
	
  
  	if($up){
			alert('تم التسجيل بنجاح');
			
			return;
			
		}
		
		
		
	});
	
	
</script> ";



	
	
	
	}else{
	
	
	echo('

<script src="jquery-1.9.1.min.js" type="text/javascript"></script> ');

echo"
<script>

$(document).ready(function(h) {
	
  
  	
			alert('فشل فى التسجيل');
			
			return;
			
		
		
		
		
	});
	
	
</script> ";
	
	
	
	}
	
	}

	











echo('














<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تواصل معنا</title>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8AAQEB/gAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP////8A////AP///wD///8A////AP///wD///8A////AP///wD///8A4M2+SZBdGP+XXR//uo5qrP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8AZkUm/tKlUf/PoVn/zJxh/8qYaP9/TiX/////AP///wD///8A////AP///wD///8A////AP///wD///8AmGQ64c6XGP/JkB//xYom/8CCLf+7fDX/t3U8/3FJKf////8A////AP///wD///8A////AP///wD///8A////ALZ6Df+0fgj/r3oH/6VwC/+eaBD/m2IV/51fGv+fXCL/8/DuEf///wD///8A////AP///wD///8A////ANfY2P/7+/v/+vj3/8WQZv/7+vn/+ff1//r49//7+vn/5c68/9Ktj/////8A////AP///wD///8A////AP///wDYuKH/8/Py/+7n4P/z8/P/3sKt//T09P/w8fH/8/Pz//Hy8v/T1NX/////AP///wD///8A////AP///wD///8Abmde/6NuJf+Yah7/jWYe/4JhHf97Whz/e1oe/4ZfH/+UZCP/fWhT/////wD///8A////AP///wD///8A////AGBRRf+0bRn//////79+Dv/Dgwf/yY4E/8SFCf++fBD/uHMV/0sxFP////8A////AP///wD///8A////AP///wBDJxH//fv5/9Oocf/+/v7//v79/86bLf/Pmiv/wYIM/7t4Ev9JLw//////AP///wD///8A////AP///wD///8AQCUP/69lHv+1bhn/8ODL/79+Dv/Qn0P/58yR/86cOf/YsHT/STAN/////wD///8A////AP///wD///8A////AEAlDv/bupr/0qd0//7+/v/z6NT/6tSp//379v/+/v3/wYAL/z4oCv////8A////AP///wD///8A////AP///wBBJQ3/r2Qf/7RtGf+6dhT/ypU6/8aJCf/Xpzj/zI8I/82PC/8+Jwj/////AP///wD///8A////AP///wD///8ASC4Y/69kH/+1bhn/3LqH/8ODDv/Mjwj/1ZwD/9mfBv/epAf/QCkJ/////wD///8A////AP///wD///8A////AEYpDv+wZh7/unMY/8OBEv/Njwz/2Z8G/+StAv/qtAP/46kG/0MqCP////8A////AP///wD///8A////AP///wD7+/sE////ANS8p/jZuJn/uXpF/7d2QP/dvpz/1rul9v///wD6+voF////AP///wD///8A8A8AAP4/AAD4HwAA8A8AAPAPAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />

<link href="Css/style1.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="Css/animate.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>


<script src="jquery-1.9.1.min.js" type="text/javascript"> </script>


<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.main {
width:216px;
margin-left:495px;
position:absolute;
margin-top:217px;

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

');


echo('


<div id="signin2">
<div id="login2">
</div>
<div id="pencil2"></div>
<!--<div id="exiet">

</div>-->
<form  method="POST">
<input name="submite" value="دخول"  type="submit" style="position:absolute;
	width:78px;
	height:28px;
	margin-top:161px;
	margin-left:40px;
	border-radius:20px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	background-color:#0076f9;
	font-color:#FFF;
	" 
	   />
	   
	   <input name="submite" value="الغاء"  type="reset" style="position:absolute;
	width:78px;
	height:28px;
	margin-top:161px;
	margin-left:130px;
	border-radius:20px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	background-color:#0076f9;
	font-color:#FFF;
	" 
	   />
	  
<!--<div id="cancel"></div>-->


<input name="username" type="text" id="username2"  placeholder="إسم المستخدم" onfocus="this.value=("");" />

<input name="password" id="password2" type="password"  placeholder="كلمة المرور" onfocus="this.value=("");" />


</form>


');

if(isset($_POST['submite'])){

$username = $_POST['username'];
$password = $_POST['password'];




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





<a href="index2.php"><div id="logo" class="animated bounceIn"></div></a>
<div id="word"></div>

<div id="iconcover">
  <a href="http://www.facebook.com"><div id="facebook"></div></a>
<a href="http://www.twitter.com"><div id="twitter"></div></a>
<a href="http://www.google.com"><div id="google"></div></a>
<a href="http://www.rss.com"><div id="rss"></div></a>
<a href="http://www.wikipedia.com"><div id="wikipedia"></div></a>

</div>


</div>

<a href="index2.php"><div id="homepage2"></div></a>
<a href="events2.php"><div id="events"></div></a>
<a href="contactUs2.php"><div id="contactus2"></div></a>
<a href="services2.php"><div id="services"></div></a>
<a href="reservation2.php"><div id="reservation"></div></a>
<div id="bigmenu3">
<input type="text" name="" id="search2" value="  ...... بحث المستخدم" placeholder="  ...... بحث المستخدم" onfocus="this.value=(" ");" />
 <div id="new1"></div>
    <div id="marquee">
      <marquee direction="right" onmouseover="this.stop();" onmouseout="this.start();">
      ');
	 include('armarquee.php');
	 echo('
</marquee>
    </div>
    <div id="new2"></div>
</div>

<!--
<div id="accordion">

  <div id="CollapsiblePanel1" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0"></div>
    <div class="CollapsiblePanelContent">
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab"></div>
          <div class="AccordionPanelContent">
          <div id="con">
          <div id="Grafics"></div>
          <div id="column9"></div>
          <div id="column10"></div>
          <div id="column11"></div>
          <div id="photoshop"></div>
          <div id="flash"></div>
          <div id="Actionscript"></div>
          <div id="Autocad"></div>
          <div id="Dmax"></div>
          <div id="Dalboum"></div>
          <div id="programming"></div>
          <div id="column12"></div>
          <div id="column13"></div>
          <div id="column14"></div>
          <div id="Designsites"></div>
          <div id="Csscourse"></div>
          <div id="javascript"></div>
          <div id="php"></div>
          <div id="Windows"></div>
          <div id="column15"></div>
          <div id="column16"></div>
          <div id="column17"></div>
          <div id="ICDL"></div>
          <div id="Maintenance"></div>
          <div id="EKids"></div>
          </div>
          </div>
        </div>
        <div class="AccordionPanel2">
          <div class="AccordionPanelTab1"></div>
          <div class="AccordionPanelContent">
          <div id="con">
          <div id="English1"></div>
          <div id="TOFEL"></div>
          <div id="Listening"></div>
          <div id="speaking"></div>
          <div id="writing"></div>
          <div id="reading"></div>
          <div id="conversation"></div>
          <div id="Advanced"></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!--
<script type="text/javascript">

var todaydate=new Date()
var curmonth=todaydate.getMonth()+1 //get current month (1-12)
var curyear=todaydate.getFullYear() //get current year

document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
</script>
<script type="text/javascript">
function buildCal(m, y, cM, cH, cDW, cD, brdr){
var mn=["January","February","March","April","May","June","July","August","September","October","November","December"];
var dim=[31,0,31,30,31,30,31,31,30,31,30,31];

var oD = new Date(y, m-1, 1); //DD replaced line to fix date bug when current day is 31st
oD.od=oD.getDay()+1; //DD replaced line to fix date bug when current day is 31st

var todaydate=new Date() //DD added
var scanfortoday=(y==todaydate.getFullYear() && m==todaydate.getMonth()+1)? todaydate.getDate() : 0 //DD added

dim[1]=(((oD.getFullYear()%100!=0)&&(oD.getFullYear()%4==0))||(oD.getFullYear()%400==0))?29:28;
var t="<div class=""+cM+""><table class=""+cM+"" cols="7" cellpadding="0" border=""+brdr+"" cellspacing="0"><tr align="center">";
t+="<td colspan="7" align="center" class=""+cH+"">"+mn[m-1]+" - "+y+"</td></tr><tr align="center">";
for(s=0;s<7;s++)t+="<td class=""+cDW+"">"+"SMTWTFS".substr(s,1)+"</td>";
t+="</tr><tr align="center">";
for(i=1;i<=42;i++){
var x=((i-oD.od>=0)&&(i-oD.od<dim[m-1]))? i-oD.od+1 : "&nbsp;";
if (x==scanfortoday) //DD added
x="<span id="today">"+x+"</span>" //DD added
t+="<td class=""+cD+"">"+x+"</td>";
if(((i)%7==0)&&(i<36))t+="</tr><tr align="center">";
}
return t+="</tr></table></div>";
}
</script> 

<div id="Advertisment"></div>-->

<div id="contact">
<div id="contactword"></div>
</div>
<div id="or"></div>

<div id="contactimg"></div>

<script src="https://static-interlogyllc.netdna-ssl.com/static/jotform.js?3.1.1410" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $("input_4").hint("ex: myname@example.com");
   });
</script>
<link href="https://static-interlogyllc.netdna-ssl.com/static/formCss.css?3.1.1410" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://static-interlogyllc.netdna-ssl.com/css/styles/solid.css?3.1.1410" />
<link type="text/css" media="print" rel="stylesheet" href="https://static-interlogyllc.netdna-ssl.com/css/printForm.css?3.1.1410" />

<script src="https://static-interlogyllc.netdna-ssl.com/static/jotform.js?3.1.1410" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $("input_4").hint("ex: myname@example.com");
   });
</script>
<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.1410" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/solid.css?3.1.1410" />
<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.1410" />
<style type="text/css">
    .form-label{
        width:150px !important;
    }
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:650px;
		margin-left:310px;
		margin-top:240px;
		border-radius:7px;
        background:url(http://myjotform.com/images/brushed.png) 50% 50% rgb(153, 153, 153);
        color:#050505 !important;
        font-family:"Comic Sans MS";
        font-size:13px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:#050505;
    }

</style>

<link type="text/css" rel="stylesheet" href="https://secure.myjotform.com/css/styles/buttons/form-submit-button-simple_blue.css?3.1.1410"/>





<form class="jotform-form"  method="post" name="form_32345276055554" id="32345276055554" accept-charset="utf-8">
  <input type="hidden" name="formID" value="32345276055554" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line" id="id_1">
        <label class="form-label-left" id="label_1" for="input_1"> Full Name </label>
        <div id="cid_1" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="firstname" id="first_1" />
            <label class="form-sub-label" for="first_1" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="lastname" id="lastname" />
            <label class="form-sub-label" for="last_1" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line" id="id_7">
        <label class="form-label-left" id="label_7" for="input_7"> Gender </label>
        <div id="cid_7" class="form-input">
          <select class="form-dropdown" style="width:150px" id="input_7" name="gender">
           <!-- <option value="">  </option> -->
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
          </select>
        </div>
      </li>
      <li class="form-line" id="id_8">
        <label class="form-label-left" id="label_8" for="input_8"> Phone Number </label>
        <div id="cid_8" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="areacode" id="arecode" size="3">
            -
            <label class="form-sub-label" for="input_8_area" id="sublabel_area"> Area Code </label></span><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="phone" id="phone" size="8">
            <label class="form-sub-label" for="input_8_phone" id="sublabel_phone"> Phone Number </label></span>
        </div>
      </li>
      <li class="form-line" id="id_4">
        <label class="form-label-left" id="label_4" for="input_4"> E-mail </label>
        <div id="cid_4" class="form-input">
          <input type="email" class=" form-textbox validate[Email]" id="email" name="email" size="30" value="" />
        </div>
      </li>
      <li class="form-line" id="id_10">
        <label class="form-label-top" id="label_10" for="input_10"> Your opinion </label>
        <div id="cid_10" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table">
            <tr>
              <th style="border:none">&nbsp;
                
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0">
                Very Satisfied
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1">
                Satisfied
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2">
                Somewhat Satisfied
              </th>
              <th class="form-matrix-column-headers form-matrix-column_3">
                Not Satisfied
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Service Quality
              </th>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="service" id="service" value="Very Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="service" id="service" value="Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="service" id="service" value="Somewhat Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="service" id="service" value="Not Satisfied" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Overall Hygiene
              </th>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="overall" value="Very Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="overall" value="Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="overall" value="Somewhat Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="overall" value="Not Satisfied" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Responsiveness
              </th>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="responsive" value="Very Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="responsive" value="Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="responsive" value="Somewhat Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="responsive" value="Not Satisfied" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Kindness and Helpfulness
              </th>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="kind" id="kind" value="Very Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="kind" id="kind" value="Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="kind" id="kind" value="Somewhat Satisfied" />
              </td>
              <td align="center" class="form-matrix-values">
                <input class="form-radio" type="radio" name="kind" id="kind" value="Not Satisfied" />
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-left" id="label_9" for="input_9"> Message </label>
        <div id="cid_9" class="form-input">
          <textarea id="input_9" class="form-textarea" name="messege" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" class="form-buttons-wrapper">
            <button id="input_2" type="submit" name="submit" class="form-submit-button form-submit-button-simple_blue">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="32345276055554" /> 
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "32345276055554-32345276055554";
  </script>
</form>




<div id="fotter">
  <div id="thebest"></div>

<div id="copyrights"></div>
</div>
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

</script>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>

</body>
</html>
');


















?>
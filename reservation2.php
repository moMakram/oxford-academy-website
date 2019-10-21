<?php
session_start();
include ("connec.php");



if(isset($_POST['submit'])){


echo ('hello');
$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$phone = strip_tags( $_POST['phone']);
$zip = strip_tags( $_POST['zip']);
$gender = strip_tags($_POST['gender']);
$areacode = strip_tags( $_POST['areacode']);
$email = strip_tags($_POST['email']);
$staddress = $_POST['staddress'];
$staddress2 = strip_tags($_POST['staddress2']);
$city = strip_tags($_POST['city']);
$state = strip_tags($_POST['state']);
$country = strip_tags($_POST['country']);
$month = strip_tags($_POST['month']);
$day = strip_tags($_POST['day']);
$year = strip_tags($_POST['year']);
$course = strip_tags($_POST['course']);
///$service = $_POST['service'];
///$overall = $_POST['overall'];
///$responsive = $_POST['responsive'];
///$kind = $_POST['kind'];






  if($firstname!='' && $lastname!='' && $phone!=''&& $zip!='' && $gender!='' && $areacode!='' && $staddress!=''&& $email!=''&& $staddress2!=''&& $city!=''&& $state!=''&& $country!=''&& $month!=''&& $day!=''&& $year!=''&& $course!=''  )  {
	
	$up = mysql_query("insert into reserve (fullname,lastname,phone,zip,areacode,gender,email,staddress,staddress2,city,state,country,month,day,year,course) values  ('$firstname','$lastname','$phone','$zip','$areacode','$gender','$email','$staddress', '$staddress2','$city' ,'$state' ,'$country' ,'$month','$day','$year','$course')  ") or die( mysql_error());
	
	
	
	
  

echo('

<script src="jquery-1.9.1.min.js"> </script> ');
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

<script src="jquery-1.9.1.min.js"> </script> ');
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
<title>الحجز</title>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8AAQEB/gAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP////8A////AP///wD///8A////AP///wD///8A////AP///wD///8A4M2+SZBdGP+XXR//uo5qrP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8AZkUm/tKlUf/PoVn/zJxh/8qYaP9/TiX/////AP///wD///8A////AP///wD///8A////AP///wD///8AmGQ64c6XGP/JkB//xYom/8CCLf+7fDX/t3U8/3FJKf////8A////AP///wD///8A////AP///wD///8A////ALZ6Df+0fgj/r3oH/6VwC/+eaBD/m2IV/51fGv+fXCL/8/DuEf///wD///8A////AP///wD///8A////ANfY2P/7+/v/+vj3/8WQZv/7+vn/+ff1//r49//7+vn/5c68/9Ktj/////8A////AP///wD///8A////AP///wDYuKH/8/Py/+7n4P/z8/P/3sKt//T09P/w8fH/8/Pz//Hy8v/T1NX/////AP///wD///8A////AP///wD///8Abmde/6NuJf+Yah7/jWYe/4JhHf97Whz/e1oe/4ZfH/+UZCP/fWhT/////wD///8A////AP///wD///8A////AGBRRf+0bRn//////79+Dv/Dgwf/yY4E/8SFCf++fBD/uHMV/0sxFP////8A////AP///wD///8A////AP///wBDJxH//fv5/9Oocf/+/v7//v79/86bLf/Pmiv/wYIM/7t4Ev9JLw//////AP///wD///8A////AP///wD///8AQCUP/69lHv+1bhn/8ODL/79+Dv/Qn0P/58yR/86cOf/YsHT/STAN/////wD///8A////AP///wD///8A////AEAlDv/bupr/0qd0//7+/v/z6NT/6tSp//379v/+/v3/wYAL/z4oCv////8A////AP///wD///8A////AP///wBBJQ3/r2Qf/7RtGf+6dhT/ypU6/8aJCf/Xpzj/zI8I/82PC/8+Jwj/////AP///wD///8A////AP///wD///8ASC4Y/69kH/+1bhn/3LqH/8ODDv/Mjwj/1ZwD/9mfBv/epAf/QCkJ/////wD///8A////AP///wD///8A////AEYpDv+wZh7/unMY/8OBEv/Njwz/2Z8G/+StAv/qtAP/46kG/0MqCP////8A////AP///wD///8A////AP///wD7+/sE////ANS8p/jZuJn/uXpF/7d2QP/dvpz/1rul9v///wD6+voF////AP///wD///8A8A8AAP4/AAD4HwAA8A8AAPAPAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />

<link href="Css/style1.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="Css/animate.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
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
<div id="body2">
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
<a href="contactUs2.php"><div id="contactus"></div></a>
<a href="services2.php"><div id="services"></div></a>
<a href="reservation2.php"><div id="reservation3"></div></a>
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
</div>


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

<div id="Advertisment"></div>


<div id="reservation2">
<div id="reservationword"></div>
</div>
<div id="resimg"></div>

<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.1410" type="text/javascript"></script>
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
		border-radius:7px;
        width:650px;
		margin-left:295px;
		margin-top:250px;
        background:url(http://myjotform.com/images/brushed.png) 50% 50% rgb(153, 153, 153);
        color:#050505 !important;
        font-family:"Comic Sans MS";
        font-size:13px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:#050505;
    }

</style>

<link type="text/css" rel="stylesheet" href="http://myjotform.com/css/styles/buttons/form-submit-button-simple_blue.css?3.1.1410"/>
<form class="jotform-form"  method="post" name="form_32345276055554" id="32345276055554" accept-charset="utf-8">
  <input type="hidden" name="formID" value="32345276055554" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line" id="id_1">
        <label class="form-label-left" id="label_1" for="input_1"> Full Name </label>
        <div id="cid_1" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="firstname" id="first_1" />
            <label class="form-sub-label" for="first_1" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="lastname" id="last_1" />
            <label class="form-sub-label" for="last_1" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line" id="id_7">
        <label class="form-label-left" id="label_7" for="input_7"> Gender </label>
        <div id="cid_7" class="form-input">
          <select class="form-dropdown"  style="width:150px" id="input_7" name="gender">
            <option value="">  </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
          </select>
        </div>
      </li>
      <li class="form-line" id="id_8">
        <label class="form-label-left" id="label_8" for="input_8"> Phone Number </label>
        <div id="cid_8" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="areacode" id="input_8_area" size="3">
            -
            <label class="form-sub-label" for="input_8_area" id="sublabel_area"> Area Code </label></span><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="phone" id="input_8_phone" size="8">
            <label class="form-sub-label" for="input_8_phone" id="sublabel_phone"> Phone Number </label></span>
        </div>
      </li>
      <li class="form-line" id="id_6">
        <label class="form-label-left" id="label_6" for="input_6"> Address </label>
        <div id="cid_6" class="form-input">
          <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox form-address-line" type="text" name="staddress" id="input_6_addr_line1" />
                  <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1"> Street Address </label></span>
              </td>
            </tr>
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox form-address-line" type="text" name="staddress2" id="input_6_addr_line2" size="46" />
                  <label class="form-sub-label" for="input_6_addr_line2" id="sublabel_6_addr_line2"> Street Address Line 2 </label></span>
              </td>
            </tr>
            <tr>
              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox form-address-city" type="text" name="city" id="input_6_city" size="21" />
                  <label class="form-sub-label" for="input_6_city" id="sublabel_6_city"> City </label></span>
              </td>
              <td><span class="form-sub-label-container"><input class="form-textbox form-address-state" type="text" name="state" id="input_6_state" size="22" />
                  <label class="form-sub-label" for="input_6_state" id="sublabel_6_state"> State / Province </label></span>
              </td>
            </tr>
            <tr>
              <span class="form-sub-label-container"><input class="form-textbox form-address-postal" type="text" name="zip" id="input_6_postal" size="10" />
                  <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal"> Postal / Zip Code </label></span>
              
              <td><span class="form-sub-label-container"><select class="form-dropdown form-address-country" name="country" id="input_6_country">
                    <option value="" selected> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="People"s Republic of China"> People"s Republic of China </option>
                    <option value="Republic of China"> Republic of China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d"Ivoire"> Cote d"Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="Swaziland"> Swaziland </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_6_country" id="sublabel_6_country"> Country </label></span>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" id="id_3">
        <label class="form-label-left" id="label_3" for="input_3"> Birth Date </label>
        <div id="cid_3" class="form-input"><span class="form-sub-label-container"><select class="form-dropdown" name="month" id="input_3_month">
              <option>  </option>
              <option value="January"> January </option>
              <option value="February"> February </option>
              <option value="March"> March </option>
              <option value="April"> April </option>
              <option value="May"> May </option>
              <option value="June"> June </option>
              <option value="July"> July </option>
              <option value="August"> August </option>
              <option value="September"> September </option>
              <option value="October"> October </option>
              <option value="November"> November </option>
              <option value="December"> December </option>
            </select>
            <label class="form-sub-label" for="input_3_month" id="sublabel_month"> Month </label></span><span class="form-sub-label-container"><select class="form-dropdown" name="day" id="input_3_day">
              <option>  </option>
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
              <option value="5"> 5 </option>
              <option value="6"> 6 </option>
              <option value="7"> 7 </option>
              <option value="8"> 8 </option>
              <option value="9"> 9 </option>
              <option value="10"> 10 </option>
              <option value="11"> 11 </option>
              <option value="12"> 12 </option>
              <option value="13"> 13 </option>
              <option value="14"> 14 </option>
              <option value="15"> 15 </option>
              <option value="16"> 16 </option>
              <option value="17"> 17 </option>
              <option value="18"> 18 </option>
              <option value="19"> 19 </option>
              <option value="20"> 20 </option>
              <option value="21"> 21 </option>
              <option value="22"> 22 </option>
              <option value="23"> 23 </option>
              <option value="24"> 24 </option>
              <option value="25"> 25 </option>
              <option value="26"> 26 </option>
              <option value="27"> 27 </option>
              <option value="28"> 28 </option>
              <option value="29"> 29 </option>
              <option value="30"> 30 </option>
              <option value="31"> 31 </option>
            </select>
            <label class="form-sub-label" for="input_3_day" id="sublabel_day"> Day </label></span><span class="form-sub-label-container"><select class="form-dropdown" name="year" id="input_3_year">
              <option>  </option>
              <option value="2013"> 2013 </option>
              <option value="2012"> 2012 </option>
              <option value="2011"> 2011 </option>
              <option value="2010"> 2010 </option>
              <option value="2009"> 2009 </option>
              <option value="2008"> 2008 </option>
              <option value="2007"> 2007 </option>
              <option value="2006"> 2006 </option>
              <option value="2005"> 2005 </option>
              <option value="2004"> 2004 </option>
              <option value="2003"> 2003 </option>
              <option value="2002"> 2002 </option>
              <option value="2001"> 2001 </option>
              <option value="2000"> 2000 </option>
              <option value="1999"> 1999 </option>
              <option value="1998"> 1998 </option>
              <option value="1997"> 1997 </option>
              <option value="1996"> 1996 </option>
              <option value="1995"> 1995 </option>
              <option value="1994"> 1994 </option>
              <option value="1993"> 1993 </option>
              <option value="1992"> 1992 </option>
              <option value="1991"> 1991 </option>
              <option value="1990"> 1990 </option>
              <option value="1989"> 1989 </option>
              <option value="1988"> 1988 </option>
              <option value="1987"> 1987 </option>
              <option value="1986"> 1986 </option>
              <option value="1985"> 1985 </option>
              <option value="1984"> 1984 </option>
              <option value="1983"> 1983 </option>
              <option value="1982"> 1982 </option>
              <option value="1981"> 1981 </option>
              <option value="1980"> 1980 </option>
              <option value="1979"> 1979 </option>
              <option value="1978"> 1978 </option>
              <option value="1977"> 1977 </option>
              <option value="1976"> 1976 </option>
              <option value="1975"> 1975 </option>
              <option value="1974"> 1974 </option>
              <option value="1973"> 1973 </option>
              <option value="1972"> 1972 </option>
              <option value="1971"> 1971 </option>
              <option value="1970"> 1970 </option>
              <option value="1969"> 1969 </option>
              <option value="1968"> 1968 </option>
              <option value="1967"> 1967 </option>
              <option value="1966"> 1966 </option>
              <option value="1965"> 1965 </option>
              <option value="1964"> 1964 </option>
              <option value="1963"> 1963 </option>
              <option value="1962"> 1962 </option>
              <option value="1961"> 1961 </option>
              <option value="1960"> 1960 </option>
              <option value="1959"> 1959 </option>
              <option value="1958"> 1958 </option>
              <option value="1957"> 1957 </option>
              <option value="1956"> 1956 </option>
              <option value="1955"> 1955 </option>
              <option value="1954"> 1954 </option>
              <option value="1953"> 1953 </option>
              <option value="1952"> 1952 </option>
              <option value="1951"> 1951 </option>
              <option value="1950"> 1950 </option>
              <option value="1949"> 1949 </option>
              <option value="1948"> 1948 </option>
              <option value="1947"> 1947 </option>
              <option value="1946"> 1946 </option>
              <option value="1945"> 1945 </option>
              <option value="1944"> 1944 </option>
              <option value="1943"> 1943 </option>
              <option value="1942"> 1942 </option>
              <option value="1941"> 1941 </option>
              <option value="1940"> 1940 </option>
              <option value="1939"> 1939 </option>
              <option value="1938"> 1938 </option>
              <option value="1937"> 1937 </option>
              <option value="1936"> 1936 </option>
              <option value="1935"> 1935 </option>
              <option value="1934"> 1934 </option>
              <option value="1933"> 1933 </option>
              <option value="1932"> 1932 </option>
              <option value="1931"> 1931 </option>
              <option value="1930"> 1930 </option>
              <option value="1929"> 1929 </option>
              <option value="1928"> 1928 </option>
              <option value="1927"> 1927 </option>
              <option value="1926"> 1926 </option>
              <option value="1925"> 1925 </option>
              <option value="1924"> 1924 </option>
              <option value="1923"> 1923 </option>
              <option value="1922"> 1922 </option>
              <option value="1921"> 1921 </option>
              <option value="1920"> 1920 </option>
            </select>
            <label class="form-sub-label" for="input_3_year" id="sublabel_year"> Year </label></span>
        </div>
      </li>
      <li class="form-line" id="id_4">
        <label class="form-label-left" id="label_4" for="input_4"> E-mail </label>
        <div id="cid_4" class="form-input">
          <input type="email" class=" form-textbox validate[Email]" id="input_4" name="email" size="30" value="" />
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5"> course </label>
        <div id="cid_5" class="form-input">
          <select class="form-dropdown"  style="width:150px" id="input_5" name="course">
            <option value="">  </option>
            <option value="Adobe photoshop"> Adobe photoshop </option>
            <option value="Adobe flash"> Adobe flash </option>
            <option value="Action script"> Action script </option>
            <option value="Autocad"> Autocad </option>
            <option value="3D max course"> 3D max course </option>
            <option value="3D alboum course"> 3D alboum course </option>
            <option value="Design Sites"> Design Sites </option>
            <option value="Css course"> Css course </option>
            <option value="Javascript"> Javascript </option>
            <option value="PHP"> PHP </option>
            <option value="ICDL"> ICDL </option>
            <option value="Maintenance"> Maintenance </option>
            <option value="EKids"> EKids </option>
            <option value="English"> English </option>
            <option value="TOEFL"> TOEFL </option>
            <option value="Listening"> Listening </option>
            <option value="Speaking"> Speaking </option>
            <option value="Reading"> Reading </option>
            <option value="writing"> writing </option>
            <option value="Conversation"> Conversation </option>
            <option value="Advanced"> Advanced </option>
          </select>
        </div>

      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:260px" class="form-buttons-wrapper">
            <button id="input_2" name="submit" type="submit" class="form-submit-button form-submit-button-simple_blue">
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
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>

</body>
</html>
');
?>
<?php
session_start();

include('connec.php');


echo(' 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اداره الموقع</title>
<link href="Css/adm_control.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body background="Images/background-freebg-web-abstract-blue-light-array-wallwuzz-hd-wallpaper-2659.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');

if (isset($_SESSION['admin_session3']) ) {

echo('

<div id="header"></div>

<div id="body6">
<a href="add_user.php"><div id="button1"></div></a> 
<a href="updateuser_form.php"><div id="button2"></div></a>
<a href="add_teacher.php"><div id="button3"></div></a>
<a href="updateuser2_form.php"><div id="button4"></div></a>
<a href="updateusers2_form.php"><div id="button5"></div></a>
<a href="logout3.php"><div id="button6"></div></a>
<a href="updateusers_form.php"><div id="button7"></div></a>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--<center>
 <font size="6" color="#993300"><a href="logout.php"> تسجـيـل الخــروج</a>  </font>
</center> -->
<br><br><br>
<marquee dir="rtl"  ><font size="5px;" color="white">  تنبيه هام : من فضلك تأكد من تسجيل الخروج حفاظا على أمن وسلامة الموقع وشكرا.</font></marquee>

<div id="control_word"></div>

</div>
<div id="fotter5"></div> ');

}else{

///header("location:login.php");

echo " <font size='3px' ></font> <a href='admin.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin.php\">";

}
echo('
</body>
</html> ');
?>

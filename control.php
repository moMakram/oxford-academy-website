<?php

session_start();
include('connec.php');


echo(' 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة التحكم الرئيسية</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body background="Images/background-freebg-web-abstract-blue-light-array-wallwuzz-hd-wallpaper-2659.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');
$id=$_GET['id'];
if (isset($_SESSION['admin_session']) ) {

echo('

<div id="header"></div>

<div id="body6">
<a href="add_news.php?id='); echo $id; echo('"><div id="button1"></div></a> 
<a href="updatenews_form.php?id='); echo $id; echo('"><div id="button2"></div></a>
<a href="Addpictures.php?id='); echo $id; echo('"><div id="button3"></div></a>
<a href="updatepic_form.php?id='); echo $id; echo('"><div id="button4"></div></a>
<a href="add_topics.php?id='); echo $id; echo('"><div id="button5"></div></a>
<a href="updatetopic_form.php?id='); echo $id; echo('"><div id="button6"></div></a>
<a href="add_event.php?id='); echo $id; echo('"><div id="button7"></div></a>
<a href="updatestud_form.php?id='); echo $id; echo('"><div id="button8"></div></a>
<a href="updatestucour_form.php?id='); echo $id; echo('"><div id="button9"></div></a>
<a href="add_type.php?id='); echo $id; echo('"><div id="button10"></div></a>
<a href="updatetype_form.php?id='); echo $id; echo('"><div id="button11"></div></a>
<a href="reserve2_control.php?id='); echo $id; echo('"><div id="button12"></div></a>
<a href="add_lastoffers.php?id='); echo $id; echo('"><div id="button13"></div></a>
<a href="updatelastoffers_form.php?id='); echo $id; echo('"><div id="button14"></div></a>
<br/><br/><br/>



<a href="add_part.php?id='); echo $id; echo('"><div id="button15"></div></a>
<a href="updateevent_form.php?id='); echo $id; echo(' "><div id="button16"></div></a>
<!--<a href="update_adver.php"><div id="button17"></div></a>-->
<a href="updatepart_form.php?id='); echo $id; echo('"><div id="button18"></div></a>
<a href="add_album.php?id='); echo $id; echo('"><div id="button19"></div></a>

<a href="updatealbum_form.php?id='); echo $id; echo('"><div id="button20"></div></a>
<a href="contact_control.php?id='); echo $id; echo('"><div id="button21"></div></a>
<a href="updateservice_form.php?id='); echo $id; echo('"><div id="button22"></div></a>
<a href="reserve_control.php?id='); echo $id; echo('"><div id="button23"></div></a>
<a href="add_course.php?id='); echo $id; echo('"><div id="button24"></div></a>

<a href="updatecour_form.php?id='); echo $id; echo('"><div id="button25"></div></a>

<a href="add_student.php?id='); echo $id; echo('"><div id="button26"></div></a>

<a href="updatestd_form.php?id='); echo $id; echo('"><div id="button27"></div></a>

<a href="add_cv.php?id='); echo $id; echo('"><div id="button28"></div></a>

<a href="add_booksection.php?id='); echo $id; echo('"><div id="button29"></div></a>

<a href="updatebooksec_form.php?id='); echo $id; echo('"><div id="button30"></div></a>

<a href="updatebooksec_form.php?id='); echo $id; echo('"><div id="button31"></div></a>

<a href="add_libitem.php?id='); echo $id; echo('"><div id="button32"></div></a>

<a href="update_libitem.php?id='); echo $id; echo('"><div id="button33"></div></a>

<a href="updateque_form.php?id='); echo $id; echo('"><div id="button34"></div></a>

<a href="add_task.php?id='); echo $id; echo('"><div id="button35"></div></a>

<a href="updatetask_form.php?id='); echo $id; echo('"><div id="button36"></div></a>

<a href="updateans_form.php?id='); echo $id; echo('"><div id="button37"></div></a>

<a href="logout.php?id='); echo $id; echo('"><div id="button38"></div></a>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br /><br /><br/>

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

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}
echo('
</body>
</html> ');
?>

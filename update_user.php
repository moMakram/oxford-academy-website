<?php

session_start();
include('connec.php');
$id=$_GET['id'];


echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التعديل على صلاحيات المستخدم</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session3']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="admincontrol.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>




<font size="7px"><center>  التعديل على صلاحيات المستخدم </center> </font>
<br><br>

<form method="POST">

<center>

  <table width="680" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم الصفحه </td>
      
	  <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">الخصوصيه</td>
	  
    </tr> 
	<?php
	
		$result = mysql_query("select * from prev where id='$id' and type='admin'");
	
	$row= mysql_fetch_array($result);
	?>
	
	<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال اخر الاخبار </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="news" style="width:100px; height:30px;">

     <?php
	 if($row['news']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الاخبار </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatenews" style="width:100px; height:30px;">

     <?php
	 if($row['updatenews']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">صور الصفحة الرئيسية </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addpicture" style="width:100px; height:30px;">

     <?php
	 if($row['addpicture']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على صور الصفحه الرئيسيه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatepicture" style="width:100px; height:30px;">

     <?php
	 if($row['updatepicture']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">ادخال مواضيع الرئيسية </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addtopics" style="width:100px; height:30px;">

     <?php
	 if($row['addtopics']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">تعديل مواضيع الرئيسية </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatetopics" style="width:100px; height:30px;">

     <?php
	 if($row['updatetopic']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addevent" style="width:100px; height:30px;">

     <?php
	 if($row['addevent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateevent" style="width:100px; height:30px;">

     <?php
	 if($row['updateevent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه اقسام الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addpart" style="width:100px; height:30px;">

     <?php
	 if($row['addpart']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه صور الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addalbum" style="width:100px; height:30px;">

     <?php
	 if($row['addalbum']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على صور الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatealbum" style="width:100px; height:30px;">

     <?php
	 if($row['updatealbum']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على اقسام الاحداث </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatepart" style="width:100px; height:30px;">

     <?php
	 if($row['updatepart']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">تواصل معنا </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatecontact" style="width:100px; height:30px;">

     <?php
	 if($row['updatecontact']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على خدمه العملاء </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updateservice" style="width:100px; height:30px;">

     <?php
	 if($row['updateservice']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">الحجز </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatecontrol" style="width:100px; height:30px;">

     <?php
	 if($row['updatecontrol']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه كورس </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addcourse" style="width:100px; height:30px;">

     <?php
	 if($row['addcourse']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الكورس </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatecourse" style="width:100px; height:30px;">

     <?php
	 if($row['updatecourse']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه الطلاب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addstudent" style="width:100px; height:30px;">

     <?php
	 if($row['addstudent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على الطلاب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatestudent" style="width:100px; height:30px;">

     <?php
	 if($row['updatestudent']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه كورس للطالب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addstucourse" style="width:100px; height:30px;">

     <?php
	 if($row['addstucourse']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على كورسات الطلبه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatestucourse" style="width:100px; height:30px;">

     <?php
	 if($row['updatestucourse']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه ميعاد </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addtype" style="width:100px; height:30px;">

     <?php
	 if($row['addtype']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على المواعيد </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatetype" style="width:100px; height:30px;">

     <?php
	 if($row['updatetype']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه صفحه المحاضر </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addcv" style="width:100px; height:30px;">

     <?php
	 if($row['addcv']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه اخر العروض </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addlastoffers" style="width:100px; height:30px;">

     <?php
	 if($row['addlastoffers']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على اخر العروض </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatelastoffers" style="width:100px; height:30px;">

     <?php
	 if($row['updatelastoffers']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على حجز الطلبه </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="reservecontrol2" style="width:100px; height:30px;">

     <?php
	 if($row['reservecontrol2']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه قسم كتب جديد </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addbooksec" style="width:100px; height:30px;">

     <?php
	 if($row['addbooksec']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعديل على اقسام الكتب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatebooksec" style="width:100px; height:30px;">

     <?php
	 if($row['updatebooksec']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">اضافه كتاب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="addlibitem" style="width:100px; height:30px;">

     <?php
	 if($row['addlibitem']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
		<tr style="background:#999; height:35px;">
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">التعدبل على الكتاب </td>
      
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;">
	 
	  
	  <select name="updatelibitem" style="width:100px; height:30px;">

     <?php
	 if($row['updatelibitem']=='0'){
     echo('
     <option>  0 </option>
	 <option> 1 </option>
     ');
     }else{
	 echo('
     <option> 1 </option>
	 <option> 0</option>
     ');
	 }
     ?>


     </select>
	  
	  </td>
	  
    </tr> 
	
	
	
	
	
	
	
</table>
<input name="submit" type="submit" value="ok"  style="width:100px; height:30px;  position:absolute; margin-left:-80px; margin-top:230px;" />


</center>

</form>


<?php

if(isset($_POST['submit'])){

$news = $_POST['news'];
$updatenews = $_POST['updatenews'];
$addpicture = $_POST['addpicture'];
$updatepicture = $_POST['updatepicture'];
$addtopics = $_POST['addtopics'];
$updatetopics = $_POST['updatetopics'];
$addevent = $_POST['addevent'];
$updateevent = $_POST['updateevent'];
$addpart = $_POST['addpart'];
$updatepart = $_POST['updatepart'];
$addalbum = $_POST['addalbum'];
$updatealbum = $_POST['updatealbum'];
$updatecontact = $_POST['updatecontact'];
$updatecontrol = $_POST['updatecontrol'];
$updateservice = $_POST['updatecontrol'];
$addstudent = $_POST['addstudent'];
$updatestudent = $_POST['updatestudent'];
$addcourse = $_POST['addcourse'];
$updatecourse = $_POST['updatecourse'];
$addstucourse = $_POST['addstucourse'];
$updatestucourse = $_POST['updatestucourse'];
$addtype = $_POST['addtype'];
$updatetype = $_POST['updatetype'];
$addcv = $_POST['addcv'];
$addlastoffers = $_POST['addlastoffers'];
$updatelastoffers = $_POST['updatelastoffers'];
$reservecontrol2 = $_POST['reservecontrol2'];
$addbooksec = $_POST['addbooksec'];
$updatebooksec = $_POST['updatebooksec'];
$addlibitem = $_POST['addlibitem'];
$updatelibitem = $_POST['updatelibitem'];



$result2 = mysql_query(" update prev set  news='$news'
,updatenews='$updatenews',updatenews='$updatenews',addpicture='$addpicture',updatepicture='$updatepicture',addtopics='$addtopics',updatetopic='$updatetopics',addevent='$addevent',
updateevent='$updateevent',addpart='$addpart',updatepart='$updatepart',addalbum='$addalbum',updatealbum='$updatealbum',
updatecontact='$updatecontact',updateservice='$updateservice',updatecontrol='$updatecontrol',addcourse='$addcourse',updatecourse='$updatecourse',addstudent='$addstudent',


updatestudent='$updatestudent',addstucourse='$addstucourse',updatestucourse='$updatestucourse',addtype='$addtype',updatetype='$updatetype',addcv='$addcv',addlastoffers='$addlastoffers',
updatelastoffers='$updatelastoffers',reservecontrol2='$reservecontrol2',addbooksec='$addbooksec',updatebooksec='$updatebooksec',addlibitem='$addlibitem',updatelibitem='$updatelibitem'







 where id='$id'  " ) ;




 echo "<br />";
if ($result2){
echo('<center>');
echo ("inserted");
echo("<br>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateuser_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"2;URL=updateuser_form.php\">";
echo('</center>');
}
else
{
echo "error";
}
}


	
	
echo('
	
  
</div>
<div id="fotter4"></div> ');

}else{

///header("location:admin.php");

echo " <font size='3px' ></font> <a href='admin.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin.php\">";

}
echo('
</body>
</html> 
');
?>

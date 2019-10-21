
<?php



echo "hello";

include('connec.php');

if(isset($_POST['submite'])){

$username = $_POST['username2'];
$password = $_POST['password2'];




// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

 


  $result = mysql_query("select * from student where username = ('$username') and password = ('$password')");
  ///$row = mysql_fetch_array($result);
$count = mysql_num_rows( $result);



if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
///session_register("username");
///session_register("password");

////session_start();

$_SESSION['admin_session'] = "$username";


echo " <font size='4px' color='red'><center>اذا لم يتم نقلك تلقائياً </center></font> <a href='profile.php'><font size='5px'><center> اضغط هنا </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"5;URL=profile.php\">";



///header("location:log2.php");
}
else {

echo('<br><br>');
echo (" <font size='4px' ><center> كلمه المرور او الرقم السرى خطأ </center></font>");

}


}

?>

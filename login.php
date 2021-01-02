<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("ecommerce", $con);
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="SELECT * FROM users WHERE uname = '$uname' and password = '$pass'";
$result=mysql_query($sql);
$count = mysql_num_rows($result);
if($count==1)
{
   $_SESSION['username'] = $uname;
    $_SESSION['password'] = $pass;
    header('location:login_success.php');
}
else
	echo "<a href='landing_page.html'>invalid credentials. try again</a>";
?>
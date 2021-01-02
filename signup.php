<?php
$con = mysql_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("ecommerce", $con);
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$addr=$_POST['addr'];
$cpass=$_POST['cpass'];
if($cpass == $pass)
{
	$sql="INSERT INTO users VALUES ($uname, $pass, $addr)";
	if(mysql_query($sql,$con))
	{
		echo "Record inserted successfully";
	}
    header('location:landing_page.html');
}
?>
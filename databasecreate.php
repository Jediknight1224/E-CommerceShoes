<?php
$con=mysql_connect("localhost","root","");
if(!$con)
	die("error connecting to server".mysql_error);
$sql = "CREATE DATABASE ecommerce";
if (mysql_query($sql,$con))
	echo "Database ecommerce created";
else
	echo "Error creating database: " . mysql_error();
mysql_select_db(ecommerce,$con);
$sql1="CREATE TABLE users(uname varchar(20), password char, address text)";
if(mysql_query($sql1,$con))
{ 
	echo "table created";
}
else
	echo "Error creating table:".mysql_error();
$sql2="CREATE TABLE catalog(item varchar(50), stock int)";
if(mysql_query($sql2,$con))
{ 
	echo "table created";
}
else
	echo "Error creating table:".mysql_error();
?> 
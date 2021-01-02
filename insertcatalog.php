<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("ecommerce", $con);
$item1="INSERT INTO catalog VALUES ('shoes1', '20')";
$item2="INSERT INTO catalog VALUES ('shoes2', '20')";
$item3="INSERT INTO catalog VALUES ('shoes3', '20')";
$item4="INSERT INTO catalog VALUES ('shoes4', '20')";
$item5="INSERT INTO catalog VALUES ('shoes5', '20')";
$item6="INSERT INTO catalog VALUES ('shoes6', '20')";
$item7="INSERT INTO catalog VALUES ('shoes7', '20')";
if(mysql_query($item1,$con))
{
echo "Record 1 inserted successfully";
}
if(mysql_query($item2,$con))
{
echo "Record 2 inserted successfully";
}
if(mysql_query($item3,$con))
{
echo "Record 3 inserted successfully";
}
if(mysql_query($item4,$con))
{
echo "Record 4 inserted successfully";
}
if(mysql_query($item5,$con))
{
echo "Record 5 inserted successfully";
}
if(mysql_query($item6,$con))
{
echo "Record 6 inserted successfully";
}
if(mysql_query($item7,$con))
{
echo "Record 7 inserted successfully";
}
mysql_close($con);
?>
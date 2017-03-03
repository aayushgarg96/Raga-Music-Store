<?php
session_start();
?><?php
$username=$_SESSION["username"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Connection not found");
}
$db=mysql_select_db("project",$con);
if(!$db)
{
	die("Database not found");
}
$qry="delete from tableone where username='$username'";
$res=mysql_query($qry);
if(!$res)
{
	die("Couldn't Delete Account");
}
header("Location:Login_1.php");
?>
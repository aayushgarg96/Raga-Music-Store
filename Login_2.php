<?php
session_start();
?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Connection Not found");
	}
	$db=mysql_select_db("project",$con);
	if(!$db)
	{
		die("Database not found");
	}
	$qry="SELECT * FROM tableone WHERE(username='$username' AND password='$password')";
	$res=mysql_query($qry);
	$row=mysql_num_rows($res);
	if($row!='1')
	{
		header("Location:Wrong.php");
	}
	else
	{
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		header("Location:Home.php");
	}
?>

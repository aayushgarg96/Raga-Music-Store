<html>
<head>
<title>Raga - Username Already Exist</title>
<style>
body {background:url(Xc4ZUA0%20-%20Copy.png); background-size:cover;}
h3 { font-family:"Comic Sans MS", cursive; color:#F00; margin-top:200px; margin-left:550px;}
h5 {font-family:"Comic Sans MS", cursive; margin-left:600px;}
</style>
</head>
<body>

</body>
<?php
	$name=$_POST['name'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	
		$con=mysql_connect("localhost","root","", "project");
		if(!$con)
		{
			die("Connection Not found");
		}
		$db=mysql_select_db("project",$con);
		if(!$db)
		{
			die("Database not found");
		}
		$qry="INSERT INTO tableone(name, country, email, mobile, username, password) VALUES ('$name','$country','$email','$mobile','$username','$password')";

		$res=mysql_query($qry);
		if(!$res)
		{
			echo("<h3>Username Already Exist</h3>");
			echo("<h5><a href=\"Reg_1.php\">Click to go back</a></h5>");
		}
		else
		{
			header("Location:Reg_Success.php");
		}
		mysql_close();
?>

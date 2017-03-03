<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raga - View</title>
<?php
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
$user=$_SESSION["username"];
$qry="select * from tableone where username='$user'";
$res=mysql_query($qry);
if(!$res)
{
	die("Row not selected");
}
$row=mysql_fetch_array($res);
?>
<style>
body {background:url(Xc4ZUA0%20-%20Copy.png); background-size:cover;}
div#a {margin-top:200px; margin-left:500px; }
td {font-family:"Comic Sans MS", cursive; color:#1C0037; font-size:21px;}
h1 {font-family:"Comic Sans MS", cursive; color:#1C0037; margin-left:80px;}
h4 {font-family:"Comic Sans MS", cursive; margin-left:100px;}
a:link{color:#00F;}
a:visited{color:#00F;}
a:hover{color:#90C;}
</style>
</head>
<body>
<div id="a">
<h1> Your Profile </h1>
<table width="500" border="0" cellspacing="1" cellpadding="10">
  <tr>
    <td align="right">Name :</td>
    <td><?php echo $row['name'];?></td>
  </tr>
  <tr>
    <td align="right">Country :</td>
    <td><?php echo $row['country'];?></td>
  </tr>
  <tr>
    <td align="right">Email :</td>
    <td><?php echo $row['email'];?></td>
  </tr>
  <tr>
    <td align="right">Mobile Phone :</td>
    <td><?php echo $row['mobile'];?></td>
  </tr>
</table>
<a href="Home.php"><h4>Click to go back</h4></a>
</div>
</body>
</html>
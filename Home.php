<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raga - Home</title>
<style>
body {background:url(dream-background-06.jpg); background-size:cover;}
div {margin-top:150px;}
img {border:solid; border-color:#1C0037; border-radius:50px;}
h3 {color:#FFF; font-family:"Comic Sans MS", cursive;}
a:link{color:#00F;}
a:visited{color:#00F;}
a:hover{color:#90C;}
</style>
</head>
<body>
<h3 align="right">
<?php echo "Welcome ".$_SESSION["username"]."  ".date('d:m:y')." ";?>
<a href="view.php">VIEW</a>
<a href="del_conf.php">DELETE</a>
<a href="logout.php">LOGOUT</a>
</h3>
<div>
<table width="1300" cellpadding="10px"cellspacing="10px">
  <tr>
    <td><a href="Enrique.php"><img src="Enrique_dot.jpg" /></a></td>
    <td><a href="Green.php"><img src="Green_Day_dot.jpg" /></a></td>
    <td><a href="kp.php"><img src="Katy_Perry.png" /></a></td>
    <td><a href="ts.php"><img src="taylor_swift__wallpaper_by_amro0.jpg" /></a></td>
    <td><a href="sg.php"><img src="SelenaGomez_dot.jpg" /></a></td>
  </tr>
  <tr>
    <td><a href="cb.php"><img src="Chris_Brown_dot.jpg" /></a></td>
    <td><a href="eminem.php"><img src="Eminem_dot.jpg" /></a></td>
    <td><a href="lp.php"><img src="Linkin_dot.jpg" /></a></td>
    <td><a href="mv.php"><img src="Maroon_dot.jpg" /></a></td>
    <td><a href="dl.php"><img src="photo.jpg" /></a></td>
  </tr>
</table>

</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raga - Log In</title>
<style>
body { background:url(q.jpg); background-size:cover;}   
h1, h2 {font-family:"Comic Sans MS", cursive;}
td {font-family:"Comic Sans MS", cursive; font-size:21px;}
div {margin-top:200px; margin-left:800px;}
a:link{color:#00F;}
a:visited{color:#00F;}
a:hover{color:#90C;}
</style>
<script>

</script>
</head>
<body>
<div>
<h1>Raga Login</h1>
<form action="Login_2.php" method="post" name="myForm">
<table width="500" cellspacing="1" cellpadding="10">
  <tr>
   <td align="right">Username</td>
    <td><input name="username" type="text" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;"/></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td><input name="password" type="password" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;"/></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="submit" type="submit" value="Log In" style="border:2px solid #17002F; border-radius:7px; height:30px; background-color:#FFF; font-family:'Comic Sans MS', cursive; font-weight:bold;"/> or <a href="Reg_1.php"> Sign Up for Raga</a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="Forgot_pass.php">Forgotten Password</a></td>
  </tr>
</table>

</form>
</div>
</body>
</html>
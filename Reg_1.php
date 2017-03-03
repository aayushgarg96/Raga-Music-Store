<html>
<head>
<title>Raga - Sign up</title>
<style>
body {background:url(Xc4ZUA0.png); background-size:cover;}
div#a {margin-top:160px; margin-left:50px; }
td#r {font-family:"Comic Sans MS", cursive; color:#FFF; font-size:21px;}
h1, h3 {color:#FFF; font-family:"Comic Sans MS", cursive;}
</style>
<script type="text/javascript">

function validate_name()
{	
	var r=/^[A-Z a-z]+$/;
	if(document.myForm2.name.value==""||(!document.myForm2.name.value.match(r)))
	{
		document.getElementById("1").innerHTML="Please enter your correct name.";
		document.myForm2.name.focus();
		return false;
	}
	else
	{
		document.getElementById("1").innerHTML="";
		return true;
	}
}
function validate_country()
{
	if(document.myForm2.country.value==-1)
	{
		document.getElementById("2").innerHTML="Please enter your country.";
		document.myForm2.country.focus();
		return false;
	}
	else
	{
		document.getElementById("2").innerHTML="";
		return true;
	}
}
function validate_email()
{var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(document.myForm2.email.value=="")
	{
		document.getElementById("3").innerHTML="Please enter your email.";
		document.myForm2.email.focus();
		return false;
	}
	else if(re.test(document.myForm2.email.value))
	{
		document.getElementById("3").innerHTML="";
		return true;
	}
	else
	{
		document.getElementById("3").innerHTML="Please enter your email.";
		document.myForm2.email.focus();
		return false;
	}
}
function validate_mobile()
{
	if(document.myForm2.mobile.value=="")
	{
		document.getElementById("4").innerHTML="Please enter your mobile number.";
		document.myForm2.mobile.focus();
		return false;
	}
	else if(isNaN(document.myForm2.mobile.value))
	{
		document.getElementById("4").innerHTML="Please enter a valid mobile number.";
		document.myForm2.mobile.focus();
		return false;
	}
	else if(document.myForm2.mobile.value.length!=10)
	{
		document.getElementById("4").innerHTML="Please enter a mobile number with 10 digits";
		document.myForm2.mobile.focus();
		return false;
	}
	else
	{
		document.getElementById("4").innerHTML="";
		return true;
	}
}
function validate_username()
{
	if(document.myForm2.username.value=="")
	{
		document.getElementById("5").innerHTML="Please enter your username.";
		document.myForm2.username.focus();
		return false;
	}
	else
	{
		document.getElementById("5").innerHTML="";
		return true;
	}
}
function validate_password()
{
	if(document.myForm2.password.value=="")
	{
		document.getElementById("6").innerHTML="Please enter your password.";
		document.myForm2.password.focus();
		return false;
	}
	else if(document.myForm2.password.value.length<8||document.myForm2.password.value.length>25)
	{
		document.getElementById("6").innerHTML="Password must be between 8 to 25 characters.";
		document.myForm2.password.innerHTML="";
		document.myForm2.password.focus();
		return false;
	}
	else
	{
		document.getElementById("6").innerHTML="";
		return true;
	}
}
function validate_conf()
{
	if(document.myForm2.password.value!=document.myForm2.conf.value)
	{
		document.getElementById("7").innerHTML="Password do not match.";
		document.myForm2.conf.innerHTML="";
		document.myForm2.conf.focus();
		return false;
	}
	else
	{
		document.getElementById("7").innerHTML="";
		return true;
	}
}
</script>
</head>
<body>
<div id="a">
<h1>Sign Up</h1>
<h3>It's free and always will be</h3>
<form action="Reg_2.php" method="post" name="myForm2" onSubmit="return validate_conf()">
<table width="1000" cellspacing="1" cellpadding="10" border="0">
  <tr>
    <td width="178" align="right" id="r">Name</td>
    <td width="255" id="l"><input required name="name" type="text" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_name()"/></td>
    <td id="1" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Country</td>
    <td id="l"><select name="country" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_country()"> <h3 id="2"><h3>
    <option value="-1" selected>Choose
    <option value="Afganistan" >Afganistan
    <option value="Australia" >Australia
    <option value="Brazil" >Brazil
    <option value="Canada" >Canada
    <option value="China" >China
    <option value="Denmark" >Denmark
    <option value="France" >France
    <option value="Germany" >Germany
    <option value="India" >India
    <option value="Japan" >Japan
    <option value="Nepal" >Nepal
    <option value="New Zealand" >New Zealand
    <option value="Pakistan" >Pakistan
    <option value="Russia" >Russia
    <option value="United Kingdom" >United Kingdom
    <option value="United States" >United States
	</select></td>
    <td id="2" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Email</td>
    <td id="l"><input required name="email" type="email" size="30" maxlength="50" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_email()"/></td>
    <td id="3" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Mobile Phone</td>
    <td id="l"><input required name="mobile" type="text" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_mobile()"/></td> 
    <td id="4" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Username</td>
    <td id="l"><input required name="username" type="text" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_username()"/></td>
    <td id="5" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Password</td>
    <td id="l"><input required name="password" type="password" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;" onBlur="validate_password()"/></td>
    <td id="6" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td align="right" id="r">Confirm Password</td>
    <td id="l"><input required name="conf" type="password" size="30" maxlength="25" style="border:2px solid #17002F; border-radius:7px; height:30px; width: 230px;"/></td>
    <td id="7" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  <tr>
    <td></td>
    <td><input required name="submit" type="submit" value="Sign Up" style="border:2px solid #17002F; border-radius:7px; height:30px; background-color:#FFF; font-family:'Comic Sans MS', cursive; font-weight:bold;"/></td>
    <td id="1" style="font-family:'Comic Sans MS', cursive,; color:#FFF;"></td>
  </tr>
  
</table>
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook - Log In or Sign</title>
	<style type="text/css">
	#header1{
		background-color:#3b5998;
		float: left;
		height: 100px;
		width: 600px;


	}
	#header2{
		background-color:#3b5998;
		float: left;
		height: 100px;
		width: 730px;
		color:white; 		
	}
	#i1{margin: 30px 900px 5px 90px;
	}
	#b1{
		background-color: navy;
		color: white;
		border:none;
		padding: 6px 10px;
		
	}
	#leftmenu{
		float: left;
		height: 600px;
		width: 650px;
		background-color: #dfe3ee;
		font-family: arial;
		padding-left:100px;
		padding-top: 50px;
		font-size: 20px;
		font-weight: bold;
		



	}
	#content{
		float: left;
		height: 650px;
		width: 580px;
		background-color: #dfe3ee;
		font-size: 20px;


	}
	#head{
		font-size: 40px;
		font-weight: bold;

	}
	#b2{
		background-color: #59983b;
		padding:8px 15px;
		color: white;
		height: 40px;
		width: 100px;
		border:none;
	}
	#footer{
		color: blue;

	}
	#table1{
		font-size: 14px;
	}


	</style>

</head>
<body>
	<script type="text/javascript">
	function check()
	{
		var email=document.login.email.value;
		var pwd=document.login.pwd.value;
		if(email=="")
		{
			alert("email or phone not be empty");
			return false;
		}
		if (pwd==""||pwd.length<8) 
		{
			alert("pwd should not be empty and must have more than 8 characters");
			return false;
		}

	}
		function signup1(){
		
		var f_name=document.signup.fname.value;
		var l_name=document.signup.lname.value;
		var email1=document.signup.email1.value;
		var pwd1=document.signup.pwd1.value;
		var phone=document.signup.phone.value;
		var dob=document.signup.dob.value;
		var gender=document.signup.gender.value;
			if(f_name=="")
			{
				alert("first name should not be empty");
				return false;
			}
			if(l_name=="")
			{
				alert("Last name should not be empty");
				return false;
			}
			if(email1==""||email1.indexOf('@')==-1)
			{
				alert("should give proper email address");
				return false;
			}
			if(pwd1==""||pwd1.length<8)
			{
				alert("password should have more than 8 characters");
				return false;
			}
			if (phone=="") 
			{
				alert("phone no.should not be empty");
				return false;

			}
			if (dob=="") 
			{
				alert("Please select your date of birth");
				return false;
			}
			if (gender=="") 
			{
				alert("Please select your gender");
				return false;
			}
		}
		
	</script>
	

<div id="header1"><img src="logo1.png" id="i1"></div>
	<div id="header2">
	<form name="login" action="login.php" method="POST">
	<table align="center">
		<tr>
			<td><br>Email or Phone</td>
			<td><br>Password</td>
		</tr>
		<tr>
			<td><input type="text" autofocus="on" name="email"></input>
			<td><input type="password" name="pwd"></input></td>
			<td><button id="b1" onClick="check()">Log In</button></td>
		</tr>
		<tr>
			<td><input type="checkbox">Keep me logged in </input>
			<td>Forgot your password?</td>
		</tr>
			
</tr>
</table>
</form >
</div>
<div id="leftmenu">Facebook helps you connects and share with<br>the people in your life.<img src="fhome.png"> 
	</div>
<div id="content">
<form name="signup" action="savereg.php" method="POST" onsubmit="return signup1()">
<h1 id="head">Create an account</h1>It's free and always will be.<br><br>
<input type="text" id="fname"  placeholder="  First Name" style="padding: 4px;" name="fname"></input>
<input type="text" id="lname"placeholder="Last Name" style="padding: 4px;" name="lname"></input><br><br>
<input type="text" id="email" placeholder="Your Email" style="width: 353px; padding: 4px;" name="email1"></input><br><br>
<input type="password" id="pwd" placeholder="Password" style="width: 353px; padding: 4px;" name="pwd1"></input><br><br>
<input type="number" id="phone" placeholder="Phone" style="width: 353px; padding: 4px;" name="phone" minlength="10" maxlength="10" ></input><br><br>
Birthday<br><input type="date" name="dob" style="width: 200px; padding: 4px;"></input><br><br>
<input type="radio" name="gender" value="female">Female</input><input type="radio" name="gender" value="male">Male</input><br><br>
<font style="font-size: 15px;">By clicking Create an account,you agree to our<font color="blue"> Terms </font>and that<br> you have read our<font color="blue"> Data Policy,</font>including our<font color="blue"> Cookie Use.</font></font><br><br>
<button id="b2" name="clk_btn" style="width: 200px;">Create an account</button><br><br>
<font style="color: blue; font-size:15px" >Create a page</font><font style="font-size: 15px"> for a celebrity, band or business.</font> 
</form>
</div>
<div id="footer">
	<table id="table1" cellspacing="10px" align="center" >
		<tr >
			<td>Sign Up</td>
			<td>Log In</td>
			<td>Messenger</td>
			<td>Facebook Lite</td>
			<td>Mobile</td>
			<td>Find Friends</td>
			<td>Badges</td>
			<td>People</td>
			<td>Pages</td>
			<td>Places</td>
			<td>Games</td>
		</tr>
		<tr >
			<td>Location</td>
			<td>Celebrities</td>
			<td>Groups</td>
			<td>Moments</td>
			<td>About</td>
			<td>Create Advert</td>
			<td>Create Page</td>
			<td>Developers</td>
			<td>Careers</td>
			<td>Privacy</td>
			<td>Cookies</td>
		</tr>
		<tr >
			<td>AdChoices</td>
			<td>Terms</td>
			<td>Help</td>
		</tr>	
	</table>
</div>

</body>
</html>
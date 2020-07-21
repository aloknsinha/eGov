<html>
	<head>
		<body>
			<form method = "post" onsubmit = "validation()">
				<input type = "text" name = "fn" id="fname" placeholder="Enter First Name" size = 15>
				<input type = "text" name = "ln" id="lname" placeholder="Enter Last Name" size = 15>
				<input type = "text" name = "un" id="uname" placeholder="Enter Your username" size = 15>
				<input type = "Password" name = "pwd" id="paswd" placeholder="Enter Password" size = 15>
				<input type = "Password" name = "cpwd" id="cpaswd" placeholder="Confirm Password" size = 15>
				<input   type="submit"  name="submit" id="submit" value="SUBMIT">
			</form>
		</body>
		<script type="text/javascript">
	function validation()
	{
		var x1=document.getElementById("fname").value;
		var x2=document.getElementById("lname").value;
		var x3=document.getElementById("uname").value;
		var x4=document.getElementById("paswd").value;
		var x5=document.getElementById("cpaswd").value;
	    if(x1=="")
	    {
	     	alert("please enter your first name");
	    }
	    else if(x1.length<3)
	    {
	    	alert("Your first name must have at least 3");
	    }
	    else if(x2=="")
	    {
	    	alert("please enter your last name");
	    }
	    else if(x2.length<3)
	    {
	    	alert("Your last name must have at least 3");
	    }
	    else if(x3 =="")
	    {
	    	alert("Username Missing");
	    }
	    else if(x3 != "aloksinha.raj@gmail.com")
	    {
	    	alert("Username wrong");
	    }
	    else if(x4 != x5)
	    {
	    	alert("Password Missmatch !");
	    }
	}
	</script>
	</head>
</html>
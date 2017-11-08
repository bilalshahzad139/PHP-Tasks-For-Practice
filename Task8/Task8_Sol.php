<?php
	/*
	Objective: Apply client side validation, 
	Show error message if user doesn't provide User Name/Password
	*/
		
	//Check if Login button is pressed
	if(isset($_POST["btnLogin"]) == true)
	{
		//Get User Name & Password from REQUEST
		 $uname = $_REQUEST["txtUserName"];   
		 $pswd = $_REQUEST["txtPassword"];
		
		//Verify if user name is "admin" & password is "admin
		if($uname == "admin" && $pswd == "admin")
		{
		 // Redirect user to home.php if user is valid
		 header('Location: home.php'); //To redirect to another page
		}
	
	}
?>
<html>
<head>
<title>Task8_Sol</title>
<script type="text/javascript">
	function Main(){
		var b1 = document.getElementById('btnLogin');
		b1.onclick = function(){
			var v1 = document.getElementById('txtUserName');
			var v2 = document.getElementById('txtPassword');
			if(v1.value == ''){
				alert('User Name cant be empty!');
				return false;
			}
			if(v2.value == ''){
				alert('Password cant be empty!');
				return false;
			}
			return true; //Returning true will continue submitting
		};//end of onclick		
	}
</script>
</head>
<body onload="Main();">
	
	<form action="" method="POST" >
	   User Name: <input type="text" name="txtUserName" id="txtUserName" value=""  /><br>
	   Password: <input type="password" name="txtPassword" id="txtPassword" /><br>
	   <input type="submit" name="btnLogin" id="btnLogin" value="Login" />	   
	</form>
	
	
	
   

</body>
</html>
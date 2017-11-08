<?php
	/* ----This is continution of Task 8
	Objective: Apply server side validation, 
	Show error message if user doesn't provide User Name/Password
	--- Comment code in Main Method so that you will be able to pass empty
	data to server
	*/
	
	$uname = "";
	$error = "";
	
	//Check if Login button is pressed
	if(isset($_POST["btnLogin"]) == true)
	{
		//Get User Name & Password from REQUEST
		 $uname = $_REQUEST["txtUserName"];   
		 $pswd = $_REQUEST["txtPassword"];
		
		//Step 1: Check if username is empty, set $error variable
		
		//Step 2: Check if password is empty, set $error variable
		
		//Step 3: Check if user name/password is not 'admin', set $error variable
		
	
	}
?>
<html>
<head>
<title>Task9</title>
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
	<span style="color:red">
	<?php echo $error ?>
	</span>
	

</body>
</html>
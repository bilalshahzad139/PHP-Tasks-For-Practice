<?php
	//Objective: Login Screen with without any validation on input data
		
	//Check if Login button is pressed
	if(isset($_POST["btnLogin"]) == true)
	{
		//Get User Name & Password from REQUEST
		 $uname = $_REQUEST["txtUserName"];   
		 $pswd = $_REQUEST["txtPassword"];

		//Step 1: Verify if user name is "admin" & password is "admin
		if($uname == "admin" && $pswd == "admin")
		{
		 //Step 2: Redirect user to home.php if user is validation	
		 header('Location: home.php'); //To redirect to another page
		}
	
	}
?>
<html>
<head>
<title>Task7_Sol</title>
</head>
<body>
	
	<form action="" method="POST" >
	   User Name: <input type="text" name="txtUserName" value=""  /><br>
	   Password: <input type="password" name="txtPassword" /><br>
	   <input type="submit" name="btnLogin" value="Login" />	   
	</form>
	
	
	
   

</body>
</html>